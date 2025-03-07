<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Branch;
use App\Model\Hall;
use App\CentralLogics\Helpers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Support\Renderable;

class HallController extends Controller
{
    public function __construct(
        private Branch $branch,
        private Hall $hall,
    ) {}

    /**
     * @param Request $request
     * @return Renderable
     */
    public function list(Request $request): Renderable
    {
        // $branches = $this->branch->orderBy('id', 'DESC')->get();
        $search = $request['search'];
        $key = explode(' ', $request['search']);

        $halls = $this->hall
            ->when($search!=null, function($query) use($key){
                foreach ($key as $value) {
                    $query->where('number', 'like', "%{$value}%");
                }
            })
            ->orderBy('id', 'DESC')
            ->paginate(Helpers::getPagination());

        return view('admin-views.hall.list', compact('halls','search'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string',
                Rule::unique('halls')->where(function ($query) use ($request) {
                    return $query->where(['name' => $request->name]);
            })],
            'number'  => [
                'required',
                Rule::unique('halls')->where(function ($query) use ($request) {
                    return $query->where(['number' => $request->number]);
                }),
            ],
            // 'branch_id' => 'nullable',
            'capacity' => 'required|min:1|max:99',
        ], [
            'name.required' => translate('Hall name is required!'),
            'number.required' => translate('Hall number is required!'),
            'number.unique' => translate('Hall number is already exist in this branch!'),
            'capacity.required' => translate('Hall capacity is required!'),
         // 'branch_id.required' => translate('Branch select is required!'),
        ]);

        $hall = $this->hall;
        $hall->name = $request->name;
        $hall->number = $request->number;
        $hall->capacity = $request->capacity;
        // $hall->branch_id = $request->branch_id;
        $hall->is_active = 1;
        $hall->save();

        Toastr::success(translate('Hall added successfully!'));
        return redirect()->route('admin.hall.list');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function status(Request $request): RedirectResponse
    {
        $hall = $this->hall->find($request->id);
        $hall->is_active = $request->status;
        $hall->save();

        Toastr::success(translate('Hall status updated!'));
        return back();
    }

    /**
     * @param $id
     * @return Renderable
     */
    public function edit($id): Renderable
    {
        // $branches = $this->branch->orderBy('id', 'DESC')->get();
        $hall = $this->hall->where(['id' => $id])->first();

        return view('admin-views.hall.edit', compact('hall'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string',
                Rule::unique('halls')->where(function ($query) use ($request, $id) {
                    return $query->where(['name' => $request->name])
                        ->whereNotIn('id', [$id]);
            })],
            'number'  => [
                'required',
                Rule::unique('halls')->where(function ($query) use ($request, $id) {
                    return $query->where(['number' => $request->number])
                        ->whereNotIn('id', [$id]);
                }),
            ],
            // 'branch_id' => 'required',
            'capacity' => 'required|min:1|max:99',
        ], [
            'name.required' => translate('Hall name is required!'),
            'number.required' => translate('Hall number is required!'),
            'number.unique' => translate('Hall number is already exist in this branch!'),
            'capacity.required' => translate('Hall capacity is required!'),
            // 'branch_id.required' => translate('Branch select is required!'),
        ]);

        $hall = $this->hall->find($id);
        $hall->number = $request->number;
        $hall->capacity = $request->capacity;
        // $hall->branch_id = $request->branch_id;
        $hall->update();

        Toastr::success(translate('Hall updated successfully!'));
        return redirect()->route('admin.hall.list');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function delete(Request $request): RedirectResponse
    {
        $hall = $this->hall->find($request->id);
        $hall->delete();

        Toastr::error(translate('Hall removed!'));
        return back();
    }

    /**
     * @return Renderable
     */
    public function index(): Renderable
    {
        $branches = $this->branch->orderBy('id', 'DESC')->get();
        return view('admin-views.hall.index2', compact('branches'));
    }

    // /**
    //  * @param Request $request
    //  * @return JsonResponse
    //  */
    // public function getTableListByBranch(Request $request): JsonResponse
    // {
    //     $tables = $this->table
    //         ->with(['order'=> function ($q){
    //             $q->whereHas('table_order', function($q){
    //                 $q->where('branch_table_token_is_expired', 0);
    //             });
    //         }])
    //         ->where(['branch_id' => $request->branch_id, 'is_active' => '1'])
    //         ->get()
    //         ->toArray();

    //     $view = view('admin-views.table.table_available_card2', compact('tables'))->render();

    //     return response()->json([
    //         'view' => $view,
    //     ]);
    // }

    public function getHallListAvailable(Request $request)
    {
        // $halls = $this->hall->where();
    }

}

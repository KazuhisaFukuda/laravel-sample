<?php

namespace App\Http\Controllers\User\Tasks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;
use Carbon\Carbon;
use App\Http\Requests\User\Tasks\StoreRequest;
use App\Http\Requests\User\Tasks\UpdateRequest;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tasks = Task::where('user_id', auth('user')->id())
            ->where('target_date', '>=', now()->format('Y-m-d'))
            ->orderBy('target_date')
            ->orderBy('priority_no')
            ->paginate();

        return view('user.tasks.index')->with(compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('create', Task::class);

        return view('user.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\User\Tasks\StoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        Task::create(array_merge(
            $request->validated(),
            ['user_id' => auth('user')->id()]
        ));

        return redirect()->route('user.tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task $task
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Task $task)
    {
        $this->authorize('view', $task);

        return view('user.tasks.show')->with(compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task $task
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Task $task)
    {
        $this->authorize('update', $task);

        return view('user.tasks.edit')->with(compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\User\Tasks\UpdateRequest $request
     * @param  \App\Models\Task $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request, Task $task)
    {
        $task->update($request->validated());

        return redirect()->route('user.tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task $task
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('user.tasks.index');
    }

    /**
     * Update the status complete
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function complete(Task $task)
    {
        $task->update([
            'is_complete' => true,
        ]);

        return redirect()->route('user.tasks.index');
    }

    /**
     * Update the status unComplete...
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unComplete(Task $task)
    {
        $task->update([
            'is_complete' => false,
        ]);

        return redirect()->route('user.tasks.index');
    }
}

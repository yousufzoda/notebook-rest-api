<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreNotebookRequest;
use App\Http\Requests\v1\UpdateNotebookRequest;
use App\Models\Notebook;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Request;
use App\Http\Resources\v1\NotebookResource;
use App\Http\Resources\v1\NotebookCollection;

class ApiNotebookController extends Controller
{
    /**
     * Получение список дневников по страницам.
     *
     * @return NotebookCollection
     */
    public function index()
    {
        return new NotebookCollection(Notebook::paginate(25)) ;
    }


    /**
     * Добавить новый дневник.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return NotebookResource
     */
    public function store(StoreNotebookRequest $request)
    {
        try {
            $notebook = Notebook::create($request->all());
            return new NotebookResource($notebook);
        } catch(\Exception $exception) {
            throw new HttpException(400, "Неверные данные - {$exception->getMessage}");
        }

    }

    /**
     * Получить дневник с идентификатором.
     *
     * @param  \App\Models\Notebook  $notebook
     * @return NotebookResource
     */
    public function show(Notebook $notebook)
    {
        return new NotebookResource($notebook);
    }


    /**
     * Обновление дневника.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notebook  $notebook
     * @return NotebookResource
     */
    public function update(UpdateNotebookRequest $request, Notebook $notebook)
    {
        try {
            $notebook->update($request->all());
            return new NotebookResource($notebook);

        } catch(\Exception $exception) {
            throw new HttpException(400, "Неверные данные - {$exception->getMessage}");
        }

    }

    /**
     * Удаление дневника.
     *
     * @param  \App\Models\Notebook  $notebook
     * @return NotebookResource
     */
    public function destroy(Notebook $notebook)
    {
        $notebook->delete();
        return new NotebookResource($notebook);
    }
}

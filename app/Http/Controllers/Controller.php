<?php

namespace App\Http\Controllers;

use App\Http\Requests\v1\StoreNotebookRequest;
use App\Http\Requests\v1\UpdateNotebookRequest;
use App\Http\Resources\v1\NotebookResource;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


/**
 *
 * @OA\Info(
 *     title="API документация",
 *     version="1.0.0",
 * )
 *
 * @return NotebookResource
 *
 * @OA\Get(
 *     path="/api/v1/notebook",
 *     summary="Получение список дневников по страницам",
 *     @OA\Response(
 *          response="200",
 *          description="OK",
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(
 *                      property="data",
 *                      @OA\Property(
 *                          property="message",
 *                          type="json",
 *                      )
 *                  )
 *              )
 *          )
 *     )
 * )
 *
 * /**
 * @param StoreNotebookRequest $request
 * @return NotebookResource
 *
 * @OA\POST(
 *     path="/api/v1/notebook",
 *     summary="Добавить новый дневник",
 *
 * @OA\RequestBody(
 *    required=true,
 *    @OA\JsonContent(
 *       required={"full_name","email","phone"},
 *       @OA\Property(property="full_name", type="string", format="text", example="Komron"),
 *       @OA\Property(property="company", type="string", format="email", example="Samo OJSC"),
 *       @OA\Property(property="phone", type="string", format="text", example="+7-996-197-7608"),
 *       @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
 *       @OA\Property(property="birthday", type="string", format="text", example="25-03-1999"),
 *       @OA\Property(property="image", type="string", format="text", example="https://via.placeholder.com/400x400.png/00dd22?text=rem"),
 *
 *    ),
 * ),
 *     @OA\Response(
 *          response="200",
 *          description="OK",
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(
 *                      property="data",
 *                      @OA\Property(property="full_name", type="string", format="text", example="Komron"),
 *                      @OA\Property(property="company", type="string", format="email", example="Samo OJSC"),
 *                      @OA\Property(property="phone", type="string", format="text", example="+7-996-197-7608"),
 *                      @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
 *                      @OA\Property(property="birthday", type="string", format="text", example="25-03-1999"),
 *                      @OA\Property(property="image", type="string", format="text", example="https://via.placeholder.com/400x400.png/00dd22?text=rem"),
 *                  )
 *              )
 *          )
 *     )
 * )
 *
 * * @return NotebookResource
 *
 * @OA\Get(
 *     path="/api/v1/notebook/{notebook}",
 *     summary="Получить дневник с идентификатором",
 *     @OA\Parameter(
 *         name="notebook",
 *         in="path",
 *         description="Идентификатор дневника",
 *         example="7",
 *         required=true,
 *         @OA\Schema(
 *             type="integer",
 *         ),
 *     ),
 *
 *     @OA\Response(
 *          response="200",
 *          description="OK",
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
                        @OA\Property(
 *                      property="data",
 *                      @OA\Property(property="full_name", type="string", format="text", example="Komron"),
 *                      @OA\Property(property="company", type="string", format="email", example="Samo OJSC"),
 *                      @OA\Property(property="phone", type="string", format="text", example="+7-996-197-7608"),
 *                      @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
 *                      @OA\Property(property="birthday", type="string", format="text", example="25-03-1999"),
 *                      @OA\Property(property="image", type="string", format="text", example="https://via.placeholder.com/400x400.png/00dd22?text=rem"),
 *                  )
 *              )
 *          )
 *     )
 * )
 *
 *
 * @param UpdateNotebookRequest $request
 * @return NotebookResource
 *
 * @OA\POST(
 *     path="/api/v1/notebook/{notebook}",
 *     summary="Обновление дневника",
 *     @OA\Parameter(
 *         name="notebook",
 *         in="path",
 *         description="Идентификатор дневника",
 *         example="5",
 *         required=true,
 *         @OA\Schema(
 *             type="integer",
 *         ),
 *     ),
 *     @OA\RequestBody(
 *       required=true,
 *       @OA\JsonContent(
 *       @OA\Property(property="full_name", type="string", format="text", example="Yusuzoda"),
 *       @OA\Property(property="company", type="string", format="email", example="SDPub OJSC"),
 *       @OA\Property(property="phone", type="string", format="text", example="+7-996-197-7608"),
 *       @OA\Property(property="email", type="string", format="email", example="user133@mail.com"),
 *       @OA\Property(property="birthday", type="string", format="text", example="25-03-1980"),
 *       @OA\Property(property="image", type="string", format="text", example="https://via.placeholder.com/400x400.png/00dd22?text=rem"),
 *    ),
 * ),
 *
 *
 *     @OA\Response(
 *          response="200",
 *          description="OK",
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(
 *                      property="data",
 *                      @OA\Property(property="full_name", type="string", format="text", example="Komron"),
 *                      @OA\Property(property="company", type="string", format="email", example="Samo OJSC"),
 *                      @OA\Property(property="phone", type="string", format="text", example="+7-996-197-7608"),
 *                      @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
 *                      @OA\Property(property="birthday", type="string", format="text", example="25-03-1999"),
 *                      @OA\Property(property="image", type="string", format="text", example="https://via.placeholder.com/400x400.png/00dd22?text=rem"),
 *                  )
 *              )
 *          )
 *     )
 * )
 *
 *  @return NotebookResource
 *
 * @OA\DELETE(
 *     path="/api/v1/notebook/{notebook}",
 *     summary="Удаление дневника",
 *     @OA\Parameter(
 *         name="notebook",
 *         in="path",
 *         description="Идентификатор дневника",
 *         example="10",
 *         required=true,
 *         @OA\Schema(
 *             type="integer",
 *         ),
 *     ),*
 *
 *     @OA\Response(
 *          response="200",
 *          description="OK",
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(
 *                      property="data",
 *                      @OA\Property(property="id", type="integer", format="text", example="10"),
 *                      @OA\Property(property="full_name", type="string", format="text", example="Komron"),
 *                      @OA\Property(property="company", type="string", format="email", example="Samo OJSC"),
 *                      @OA\Property(property="phone", type="string", format="text", example="+7-996-197-7608"),
 *                      @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
 *                      @OA\Property(property="birthday", type="string", format="text", example="25-03-1999"),
 *                      @OA\Property(property="image", type="string", format="text", example="https://via.placeholder.com/400x400.png/00dd22?text=rem"),
 *
 *                  )
 *              )
 *          )
 *     )
 * )
 *
 * @date 26.10.2022
 * @author Юсуфзода Комрон
 *
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

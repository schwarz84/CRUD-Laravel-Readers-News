<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Annotations as OA;

    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="CRUD de Noticias y Lectores",
     *      description="Documentacion de API para Noticias y Lectores",
     *      @OA\Contact(
     *          email="carlos@carlos"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      ),
     * )
     * @OA\Schema(
     *     schema="News",
     *     required={"id", "title", "content", "author"},
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         description="The unique identifier of the news item"
     *     ),
     *     @OA\Property(
     *         property="title",
     *         type="string",
     *         description="Titulo de las Noticias"
     *     ),
     *     @OA\Property(
     *         property="content",
     *         type="text",
     *         description="Contenido de las noticias"
     *     ),
     *     @OA\Property(
     *         property="author",
     *         type="string",
     *         description="Autor de las noticias"
     *     )
     * )
     *
     * @OA\Schema(
     *     schema="Error",
     *     required={"message"},
     *     @OA\Property(
     *         property="message",
     *         type="string",
     *         description="Mensaje de error"
     *     )
     * )
     */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

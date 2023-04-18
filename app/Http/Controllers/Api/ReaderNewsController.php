<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use OpenApi\Annotations as OA;

class ReaderNewsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/news/{id}/readers",
     *     summary="Get news with readers",
     *     tags={"News"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of news",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="News with readers",
     *         @OA\JsonContent(ref="#/components/schemas/News")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not found",
     *         @OA\JsonContent(ref="#/components/schemas/Error")
     *     ),
     * )
     */

    public function getNewsWithReaders($id)
    {
        $news = News::with('readers')->findOrFail($id);
        return response()->json($news);
    }
}

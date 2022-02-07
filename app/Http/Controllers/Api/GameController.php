<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Services\GameService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameController extends Controller
{

    /**
     * @return QuestionResource
     */
    public function startNewGame(GameService $gameService) :JsonResource
    {
        $questions = $gameService->getFiveRandomQuestions();
        return QuestionResource::collection($questions);
    }

}

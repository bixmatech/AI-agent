<?php

namespace App\Http\Controllers;

use App\Models\ChatThread;
use Illuminate\Http\Request;
 cursor/build-ai-agent-saas-platform-15dc
use Illuminate\Support\Facades\Auth;


class ThreadController extends Controller
{
    public function share(ChatThread $thread)
    {
cursor/build-ai-agent-saas-platform-15dc
        if ($thread->user_id !== Auth::id()) {
            abort(403);
        }

        if (!$thread->is_public) {
            $thread->update(['is_public' => true]);
        }
        return redirect()->route('threads.show', $thread);
    }

    public function show(ChatThread $thread)
    {
        abort_unless($thread->is_public, 404);
        $messages = $thread->messages()->orderBy('id')->get();
        return view('threads.show', compact('thread','messages'));
    }
}

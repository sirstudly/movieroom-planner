<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use App\Repositories\UserRepository;

class TimetableComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('session_id', session()->getId());
        $view->with('current_user', session('current_user', ''));
    }
}
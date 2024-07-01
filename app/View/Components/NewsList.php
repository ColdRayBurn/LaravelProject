<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use App\News;

class NewsList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->news = News::all()->toArray();
    }

    public function detail($id): View|Closure|string
    {
        $item = News::firstWhere('id', $id)->toArray();
        return view('components.newsdetail', ['news' => $item]);
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.newslist', [
            'news' => $this->news,
        ]);
    }
}

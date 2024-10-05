<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate(['required'])]
    public string $body = '';

    public function store()
    {
        $post = Auth::user()->posts()->create($this->validate());
        flash('Post created successfully.', 'success');
        $this->reset();
        return $post;
    }
}

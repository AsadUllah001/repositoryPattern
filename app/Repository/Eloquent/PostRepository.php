<?php

namespace App\Repository\Eloquent;

use App\Models\Post;
use App\Repository\PostRepositoryInterface;
use Illuminate\Support\Collection;

class PostRepository implements PostRepositoryInterface
{

    private $post;
   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Post $post)
   {
       $this->post = $post;
   }

   /**
    * @return Collection
    */
   public function view()
   {
    return $this->post->latest()->get();
   }
   
   public function add($data)
    {
        return $this->post->create($data);
    }

    public function edit($id)
    {
        return $this->post->find($id);
    }

    
    public function update($data, $id)
    {
        $post = $this->post->find($id);
        $post->update($data);
        return $post;
    }

    public function delete($id)
    {
        $post =$this->post->find($id);
        $post->delete();
       
    }

}
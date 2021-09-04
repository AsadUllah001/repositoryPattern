<?php
namespace App\Repository;


interface PostRepositoryInterface
{
   public function view();

   public function edit($id);
   
   public function add($data);
   
   public function update($data, $id);
   
   public function delete($id);
}
?>
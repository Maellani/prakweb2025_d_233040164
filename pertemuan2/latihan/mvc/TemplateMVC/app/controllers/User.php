<?php 

class User extends Controller {
    public function index ()
    {
        $data["users"] = $this->model("User_model")->getUser();
        $this->view('detail', $data);
    }

    //public function store() //tambah
    //public function update() // update
    //public function delete() // delete
}

?>
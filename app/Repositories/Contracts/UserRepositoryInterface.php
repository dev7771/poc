<?php
namespace App\Repositories\Contracts;

interface UserRepositoryInterface {
    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}

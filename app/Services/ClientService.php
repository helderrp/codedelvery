<?php
/**
 * Created by PhpStorm.
 * User: helder
 * Date: 18/10/16
 * Time: 14:25
 */

namespace CodeDelivery\Services;


use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;

class ClientService
{

    public function __construct(ClientRepository $clientRepository, UserRepository $userRepository)
    {
        $this->clientRespository = $clientRepository;
        $this->userRespository = $userRepository;
    }

    public function update(array $data, $id){
        $this->clientRespository->update($data, $id);
        $userId = $this->clientRespository->find($id, ['user_id']);
        $this->userRespository->update($data['user'], $userId->user_id);
    }   
    
    public function create(array $data){
        $data['user']['password'] = bcrypt(123456);
        $user = $this->userRespository->create($data['user']);
        $data['user_id'] = $user->id;
        $this->clientRespository->create($data);
    }

}
<?php

/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 14-11-20
 * Time: 上午12:28
 */
interface dbManager {

    public function getInstance();

    public function add();

    public function remove();

    public function edit();

    public function query();
}
<?php


interface IDatabase {

    function connect();

    function query($sql);

    function close();

    function test();
}
<?php
/* Файл с настройками для хостинга */

/* проверяем определенна ли константа, 
пользователь не может 
получить доступ к файлу на 
прямую т.к. VG_ACCESS ещё не 
определена */
defined('VG_ACCESS') or die('Access denied');

const SITE_URL = "http://shop.my";
const PATH = "/";

const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_NAME = "shop";

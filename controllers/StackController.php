<?php

namespace app\controllers;

use app\library\Stack;
use yii\web\Controller;

/**
 * 栈操作类
 * Class StackController
 * @package app\controllers
 */
class StackController extends Controller
{
    /**
     * Description: 模拟入栈出栈
     * User: sxr
     * Date: 2020/11/25
     * Time: 10:40 下午
     */
    public function actionIndex()
    {
        $stack = new Stack(3);
        $stack->push('张三');
        $stack->push('李四');
        $stack->push('王五');
        $stack->push('赵六');
        $stack->pop();
        $stack->show();
    }


    public function actionBrowser()
    {
        $goStack = new Stack(10);
        $backStack = new Stack(10);
        // 依次打开页面a b c d
        $goStack->push('a');
        $goStack->push('b');
        $goStack->push('c');
        $goStack->push('d');

        // 再退到页面b
        $backStack->push($goStack->pop());
        $backStack->push($goStack->pop());
        $goStack->show();
        // 再前进到d
        $goStack->push($backStack->pop());
        $goStack->push($backStack->pop());
        $goStack->show();


    }

}
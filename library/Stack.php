<?php

namespace app\library;

/**
 * PHP模拟顺序栈
 * Class Stack
 */
class Stack
{
    /**
     * @var int 栈指针位置，大小为n的栈，栈顶为0，栈底为n-1
     */
    private $top = -1;

    /**
     * @var int 栈大小
     */
    private $maxSize = 0;

    /**
     * @var array
     */
    private $stack = [];


    public function __construct(int $maxSize)
    {
        if ($maxSize <= 0) {
            echo '栈大小必须大于0';
            return;
        }
        $this->maxSize = $maxSize;

    }

    /**
     * Description: 入栈
     * User: sxr
     * Date: 2020/11/25
     * Time: 5:39 下午
     * @param $element
     */
    public function push($element)
    {
        if ($this->isFull()) {
            echo '栈已经满了' . PHP_EOL;
            return;
        }
        $this->top++;
        $this->stack[$this->top] = $element;

    }

    /**
     * Description:出栈
     * User: sxr
     * Date: 2020/11/25
     * Time: 5:34 下午
     */
    public function pop()
    {
        if ($this->isEmpty()) {
            echo '栈已经空了' . PHP_EOL;
            return;
        }
        $element = $this->stack[$this->top];
        unset($this->stack[$this->top]);
        $this->top--;
        return $element;
    }

    /**
     * Description:栈是否为空
     * User: sxr
     * Date: 2020/11/25
     * Time: 5:21 下午
     * @return bool
     */
    public function isEmpty()
    {
        return $this->top == -1;
    }

    /**
     * Description:栈是否已经满了
     * User: sxr
     * Date: 2020/11/25
     * Time: 5:23 下午
     * @return bool
     */
    public function isFull()
    {
        return ($this->top == $this->maxSize - 1);
    }

    /**
     * Description:
     * User: sxr
     * Date: 2020/11/25
     * Time: 6:10 下午
     */
    public function show()
    {
        if ($this->isEmpty()) {
            echo '空栈' . PHP_EOL;
            return;
        }
        echo '从栈顶到栈底元素依次为' . PHP_EOL;
        for ($i = $this->top; $i > -1; $i--) {
            echo $this->stack[$i] . PHP_EOL;
        }
    }
}
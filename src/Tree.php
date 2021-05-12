<?php


class Tree
{
    /**
     * @var string
     * @desc 节点标识
     */
    private $id = 'id';
    /**
     * @var string
     * @desc 节点父级标识
     */
    private $parent = 'parent';
    /**
     * @var int|string
     * @desc 根节点
     */
    private $rootId = 0;

    /**
     * @var array
     * @desc 列表结构数据
     */
    private  $data = [];

    /**
     * @var array
     * @desc 树形结构数据
     */
    private $treeData = [];

    public function __construct(array $option = [])
    {
        if ($option['id']) $this->id = $option['id'];
        if ($option['parent']) $this->id = $option['parent'];
        if ($option['rootId']) $this->id = $option['rootId'];
    }

    public function setData(array $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        
    }

}
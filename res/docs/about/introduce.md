## 关于Slince

Slince是一个开源并且真正面向对象的框架，框架采用composer管理组件，组件之间依赖程度较低，每个组件独立开发并且独立对外发行，真正做到低耦合；
框架灵感来自于symfony、laravel以及cakephp等新特性的框架，运行依赖symfony以及cakephp部分组件。
[项目地址](https://github.com/slince/slince)


## 安装

### 要求
- php 5.5.9

由于框架采用composer组件安装，所以请先确认你是否安装了composer，如果没有的话请参考这里[composer](https://getcomposer.org/)，[composer中文网站](http://www.phpcomposer.com/)
在控制台执行
```
composer create-project slince/webapp [Your App] --stability=dev
```
* 目前还没有发行正式版，请注意别遗漏`--stability=dev`


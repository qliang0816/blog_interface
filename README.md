## 关于 [传送门](http://www.bestqliang.com)

* laravel 5.5
* voyager

## 目前实现功能
* 文章主界面
* markdown文章详细内容
* 文章分类
* 标签分类
* 相册功能
* 时间线功能

## 后续将会加入
* 文章点赞功能
* 文章访问量统计
* 评论功能
* 高质量文章推荐功能
* .....

## 部署服务器的一些备忘

### 安装docker

>链接: https://docs.docker.com/engine/installation/linux/docker-ce/ubuntu/

### 安装docker-compose

> 链接:https://docs.docker.com/compose/install/

### 镜像加速器

在 /etc/docker/daemon.json 中写入如下内容（如果文件不存在请新建该文件)
```
{
  "registry-mirrors": [
    "https://registry.docker-cn.com"
  ]
}
```

重启服务
```
$ sudo systemctl daemon-reload
$ sudo systemctl restart docker
```

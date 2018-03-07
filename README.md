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

添加软件源的 GPG 密钥,采用国内源。
```
国内源
$ curl -fsSL https://mirrors.ustc.edu.cn/docker-ce/linux/ubuntu/gpg | sudo apt-key add -

官方源
$ curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
```

向 source.list 中添加 Docker 软件源,采用国内源。
```
国内源
$ sudo add-apt-repository \
    "deb [arch=amd64] https://mirrors.ustc.edu.cn/docker-ce/linux/ubuntu \
    $(lsb_release -cs) \
    stable"

官方源
$ sudo add-apt-repository \
    "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
    $(lsb_release -cs) \
    stable"
```

#### *建立 docker 用户组*

默认情况下，docker 命令会使用 Unix socket 与 Docker 引擎通讯。而只有 root 用户和 docker 组的用户才可以访问 Docker 引擎的 Unix socket。出于安全考虑，一般 Linux 系统上不会直接使用 root 用户。因此，更好地做法是将需要使用 docker 的用户加入 docker 用户组。

建立 docker 组：
```
$ sudo groupadd docker
```
将当前用户加入 docker 组：
```
$ sudo usermod -aG docker $USER
```

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

执行`docker info`,看到以下结果，说明配置成功
```
“Registry Mirrors:
 https://registry.docker-cn.com/
```


## 关于

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
#### *卸载旧版本*
旧版本的 Docker 称为 docker 或者 docker-engine，使用以下命令卸载旧版本:

```
$ sudo apt-get remove docker \
               docker-engine \
               docker.io
```

#### *使用 APT 安装*

由于 apt 源使用 HTTPS 以确保软件下载过程中不被篡改。因此，我们首先需要添加使用 HTTPS 传输的软件包以及 CA 证书。
```
$ sudo apt-get update

$ sudo apt-get install \
    apt-transport-https \
    ca-certificates \
    curl \
    software-properties-common
```
为了确认所下载软件包的合法性，需要添加软件源的 GPG 密钥。
```
国内源
$ curl -fsSL https://mirrors.ustc.edu.cn/docker-ce/linux/ubuntu/gpg | sudo apt-key add -

官方源
$ curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
```

向 source.list 中添加 Docker 软件源
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

#### *安装 Docker CE*

更新 apt 软件包缓存，并安装 docker-ce：

```
$ sudo apt-get update

$ sudo apt-get install docker-ce
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

#### *二进制包*

在 Linux 上的也安装十分简单，从 官方 GitHub Release 处直接下载编译好的二进制文件即可。
```
$ sudo curl -L https://github.com/docker/compose/releases/download/1.18.0/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose
$ sudo chmod +x /usr/local/bin/docker-compose
```

#### *bash补全*
```
$ sudo curl -L https://raw.githubusercontent.com/docker/compose/1.8.0/contrib/completion/bash/docker-compose > /etc/bash_completion.d/docker-compose
```

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


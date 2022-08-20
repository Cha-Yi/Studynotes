<?php
/*
 *  参考：https://www.runoob.com/w3cnote/git-guide.html·
 *  git config
 *
 * 首先创建远程仓库库 根据远程仓库给出的命令将本地与远程绑定链接
    1，git init      创建初始化git仓库
    2，git add .     将当前仓库中的所有文件提交到暂存区 也可以使用git add xxx文件名 提交某个指定文件
    3，git commit -m '提交描述' 将暂存区文件提交
    4，git pull      拉取远程代码
    5，git push      推送代码到远程仓库

命令
    git init        创建初始化git仓库
    git add xxx     将指定文件提交到暂存区
    git add .       将当前所有文件提交到暂存区
    git commit -m "注释"  commit提交
    git pull        拉取代码
    git push        推送代码
    git push -f     强制推送代码
    git status      查看文件状态
    git ls-files 查看已提交的
分支命令：name（分支名）
    git branch          查看分支
    git branch name     创建分支
    git branch -r       列出所有分支
    git branch -a       列出本地与远程分支
    git checkout name   切换分支
    git checkout -b name    创建新分支并切换到新分支
    git checkout -m     改分支名
    git checkout -d     删除分支

    wq      退出
    i       编辑
    q       退出
    clear   清屏
    git config -l 查看配置信息
    git config --global -l 查看全局配置信息
    git config --list查看所有用户

    git log     查看历史
    git reflog  查看历史版本信息

    在本地新建一个分支： git branch newBranch
    切换到你的新分支: git checkout newBranch
    将新分支发布在github上： git push origin newBranch
    在本地删除一个分支： git branch -d newBranch
    在github远程端删除一个分支： git push origin :newBranch (分支名前的冒号代表删除)
    /git push origin –delete newBranch
    注意删除远程分支后，如果有对应的本地分支，本地分支并不会同步删除！


 * */
function(){
    //测试提交
}
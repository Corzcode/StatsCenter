<nav>
<ul>
    <li class="active">
        <a href="/stats/home/" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">系统首页</span></a>
    </li>
    <?php if ($this->userinfo['usertype'] == 0 || $this->userinfo['usertype'] == 1) : ?>
    <li>
        <a href="/stats/index/" id="stats_index_link"><i class="fa fa-lg fa-fw fa-th"></i> <span class="menu-item-parent">统计数据</span></a>
    </li>
    <li>
    </li>
    <li>
        <a href="/setting/add_interface/"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">新增接口</span></a>
    </li>
    <li>
        <a href="/setting/interface_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">接口列表</span></a>
    </li>
    <li>
        <a href="/setting/add_module/"><i class="fa fa-lg fa-fw fa-plus-circle"></i> <span class="menu-item-parent">新增模块</span></a>
    </li>
    <li>
        <a href="/setting/module_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">模块列表</span></a>
    </li>
    <?php endif; ?>
    <?php
    //只有超级管理员可以修改项目
    if ($this->userinfo['usertype'] == 0):
    ?>
        <li>
        <a href="#"><i class="fa fa-lg fa-fw fa-cog"></i> <span class="menu-item-parent">系统管理</span></a>
        <ul>
            <li
                <?php if ($this->isActiveMenu('user', 'add')){ ?>class="active"
                <?php } ?>>
                <a href="/user/add/"
            ><i class="fa fa-lg fa-fw fa-user"></i> <span
                        class="menu-item-parent">新增用户</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('user', 'ulist')){ ?>
                class="active" <?php } ?>>
                <a href="/user/ulist/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span
                        class="menu-item-parent">用户列表</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('project', 'edit')){ ?>
                class="active" <?php } ?>>
                <a href="/project/edit/"><i class="fa fa-lg fa-fw fa-pencil"></i> <span
                        class="menu-item-parent">新增项目</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('project', 'plist')){ ?>
                class="active" <?php } ?>>
                <a href="/project/plist/"><i class="fa fa-lg fa-fw fa-reorder"></i>
                    <span class="menu-item-parent">项目列表</span></a>
            </li>

            <li <?php if ($this->isActiveMenu('logs2', 'smslog')){ ?>
                class="active" <?php } ?>>
                <a href="/logs2/smslog/"><i class="fa fa-lg fa-fw fa-reorder"></i>
                    <span class="menu-item-parent">短信记录</span></a>
            </li>
        </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-cloud"></i> <span class="menu-item-parent">集群管理</span></a>
            <ul>
                <li
                    <?php if ($this->isActiveMenu('cluster')){ ?>class="active"
                    <?php } ?>>
                    <a href="/cluster/index/<?php if ($this->isActiveMenu('cluster')) echo "?p=$c_proj";?>"
                        ><i class="fa fa-lg fa-fw fa-user"></i> <span
                            class="menu-item-parent">Service集群</span></a>
                </li>
            </ul>
        </li>
    <?php
    endif;
    ?>

    <?php if ($this->userinfo['usertype'] == 0 || $this->userinfo['usertype'] == 1) : ?>
    <li>
        <a href="/logs2/index/" id="logs2_index_link"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">日志系统</span></a>
    </li>
    <?php endif; ?>
    <li>
        <a href="/user/passwd/"><i class="fa fa-lg fa-fw fa-key"></i> <span class="menu-item-parent">修改密码</span></a>
    </li>
    <?php if ($this->userinfo['usertype'] == 0) : ?>
    <li>
        <a href="#">
            <i class="fa fa-lg fa-fw fa-mobile"></i>
            <span class="menu-item-parent">App接口下发</span>
        </a>
        <ul>
            <!-- <li <?php if ($this->isActiveMenu('app_host', 'add_project')){ ?>
            class="active" <?php } ?>>
            <a href="/app_host/add_project/"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">新增项目</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('app_host', 'project_list')){ ?>
            class="active" <?php } ?>>
            <a href="/app_host/project_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">项目列表</span></a>
            </li> -->
            <li <?php if ($this->isActiveMenu('app_host', 'add_host')){ ?>
                class="active" <?php } ?>>
                <a href="/app_host/add_host/"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">新增App接口</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('app_host', 'host_list')){ ?>
                class="active" <?php } ?>>
                <a href="/app_host/host_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">App接口列表</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('app_host', 'add_rule')){ ?>
                class="active" <?php } ?>>
                <a href="/app_host/add_rule/"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">指定设备接口</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('app_host', 'rule_list')){ ?>
                class="active" <?php } ?>>
                <a href="/app_host/rule_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">指定列表</span></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <li>
        <a href="#">
            <i class="fa fa-lg fa-fw fa-link"></i>
            <span class="menu-item-parent">短网址管理</span>
        </a>
        <ul>
            <li <?php if ($this->isActiveMenu('url_shortener', 'add')){ ?>
                class="active" <?php } ?>>
                <a href="/url_shortener/add/"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">新增短网址</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('url_shortener', 'tiny_url_list')){ ?>
                class="active" <?php } ?>>
                <a href="/url_shortener/tiny_url_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">短网址列表</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('url_shortener', 'add_category')){ ?>
                class="active" <?php } ?>>
                <a href="/url_shortener/add_category/"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">新增短网址分类</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('url_shortener', 'category_list')){ ?>
                class="active" <?php } ?>>
                <a href="/url_shortener/category_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">短网址分类列表</span></a>
            </li>
        </ul>
    </li>
</ul>
</nav>

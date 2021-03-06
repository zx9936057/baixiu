<div class="aside">
    <div class="profile">
      <img class="avatar" src="../uploads/avatar.jpg">
      <h3 class="name">布头儿</h3>
    </div>
    <ul class="nav">
      <li <?php echo $current_page == 'index' ? 'class="active"' : ''; ?>>
        <a href="index.php"><i class="fa fa-dashboard"></i>仪表盘</a>
      </li>
      <?php $art_arr = array('posts' , 'postsadd' , 'categories') ?>
      <li <?php echo in_array($current_page,$art_arr) ? 'class="active"' : ''; ?>>
        <a href="#menu-posts" <?php echo in_array($current_page,$art_arr) ? '' : 'class="collapsed"'; ?> data-toggle="collapse">
          <i class="fa fa-thumb-tack"></i>文章<i class="fa fa-angle-right"></i>
        </a>
        <ul id="menu-posts" class="collapse <?php echo in_array($current_page,$art_arr) ? 'in' : ''; ?>">
          <li <?php echo $current_page == 'posts' ? 'class="active"' : ''; ?>><a href="posts.php">所有文章</a></li>
          <li <?php echo $current_page == 'postsadd' ? 'class="active"' : ''; ?>><a href="post-add.php">写文章</a></li>
          <li <?php echo $current_page == 'categories' ? 'class="active"' : ''; ?>><a href="categories.php">分类目录</a></li>
        </ul>
      </li>
      <li <?php echo $current_page == 'comments' ? 'class="active"' : ''; ?>>
        <a href="comments.php"><i class="fa fa-comments"></i>评论</a>
      </li>
      <li <?php echo $current_page == 'users' ? 'class="active"' : ''; ?>>
        <a href="users.php"><i class="fa fa-users"></i>用户</a>
      </li>
      <?php $art_arr = array('navmenus' , 'slides' , 'sittings') ?>
      <li <?php echo in_array($current_page,$art_arr) ? 'class="active"' : ''; ?>>
        <a href="#menu-settings" <?php echo in_array($current_page,$art_arr) ? '' : 'class="collapsed"'; ?> data-toggle="collapse">
          <i class="fa fa-cogs"></i>设置<i class="fa fa-angle-right"></i>
        </a>
        <ul id="menu-settings" class="collapse <?php echo in_array($current_page,$art_arr) ? 'in' : ''; ?>">
          <li <?php echo $current_page == 'navmenus' ? 'class="active"' : ''; ?>><a href="nav-menus.php">导航菜单</a></li>
          <li <?php echo $current_page == 'slides' ? 'class="active"' : ''; ?>><a href="slides.php">图片轮播</a></li>
          <li <?php echo $current_page == 'sittings' ? 'class="active"' : ''; ?>><a href="settings.php">网站设置</a></li>
        </ul>
      </li>
    </ul>
  </div>
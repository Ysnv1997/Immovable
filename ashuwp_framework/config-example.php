<?php 
/**
*
*Optinos page
*
**/
/**General options**/
$page_info = array(
  'full_name' => '主题设置',
  'optionname'=>'Immovable',
  'child'=>false,
  //'parent_slug'=>'',
  'filename' => 'Immovable'
);

$ashu_options = array();
$ashu_options[] = array(
  'name' => '全局设置',
  'id'   => 'tab1_open',
  'type' => 'open' //Look here
);
    $ashu_options[] = array(
      'name' => '网站信息',
      'id'   => 'Immovable_input_upload',
      'desc' => '',
      'std'  => '',
      'subtype' => array(
        array(
          'name' => '网站名字',
          'id'   => 'Immovable_title',
          'desc' => '首页名字',
          'std'  => '',
          'type' => 'text'
        ),
        array(
          'name' => '网站关键字',
          'id'   => 'Immovable_keywords',
          'desc' => '建议设置6-8个关键字，请用西文逗号隔开：关键字1,关键字2',
          'std'  => '',
          'type' => 'text'
        ),
        array(
          'name' => '网站描述',
          'id'   => 'Immovable_description',
          'desc' => '建议文章在100字左右，简单明了的描述网站！',
          'std'  => '',
          'type' => 'textarea'
        ),
        array(
          'name' => '备案号',
          'id'   => 'Immovable_Icp',
          'desc' => '请设置网站备案号',
          'std'  => '',
          'type' => 'text'
        ),
      ),
      'type' => 'group' //Look here.
    );


$ashu_options[] = array(
  'name' => '',
  'type' => 'close' //Look here
);
$ashu_options[] = array(
  'name' => '首页设置',
  'id'   => 'tab2_open',
  'type' => 'open' //Look here
);
    $ashu_options[] = array(
      'name' => '首页背景设置URL',
      'id'   => 'Immovable_index_bg',
      'desc' => '设置一个好看又骚气的背景图片吧！',
      'std'  => '',
      'type' => 'upload'
    );
    $ashu_options[] = array(
      'name' => '展示区H1文字',
      'id'   => 'Immovable_index_h1',
      'desc' => '这里设置首页展示区最大的文字内容，建议简而短',
      'std'  => 'Hello Immovable.',
      'type' => 'text'
    );
  $ashu_options[] = array(
        'name' => '展示区p文字',
        'id'   => 'Immovable_index_p',
        'desc' => '这里设置首页展示区的文字内容，建议简而短',
        'std'  => 'www.stayma.cn',
        'type' => 'text'
      );
  $ashu_options[] = array(
    'name' => '首页推荐区01',
    'id'   => 'Immovable_index_01',
    'desc' => '',
    'std'  => '',
    'subtype' => array(
      array(
        'name' => '标题',
        'id'   => 'Immovable_title',
        'desc' => '推荐内容标题',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => '描述',
        'id'   => 'Immovable_description',
        'desc' => '推荐内容描述',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => '底图',
        'id'   => 'Immovable_url',
        'desc' => '推荐内容底图URL',
        'std'  => '',
        'type' => 'upload'
      ),
      array(
        'name' => '链接',
        'id'   => 'Immovable_link',
        'desc' => '推荐内容链接(请加上http://)',
        'std'  => '',
        'type' => 'text'
      ),
    ),
    'type' => 'group' //Look here.
  );
  $ashu_options[] = array(
    'name' => '首页推荐区02',
    'id'   => 'Immovable_index_02',
    'desc' => '',
    'std'  => '',
    'subtype' => array(
      array(
        'name' => '标题',
        'id'   => 'Immovable_title',
        'desc' => '推荐内容标题',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => '描述',
        'id'   => 'Immovable_description',
        'desc' => '推荐内容描述',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => '底图',
        'id'   => 'Immovable_url',
        'desc' => '推荐内容底图URL',
        'std'  => '',
        'type' => 'upload'
      ),
      array(
        'name' => '链接',
        'id'   => 'Immovable_link',
        'desc' => '推荐内容链接(请加上http://)',
        'std'  => '',
        'type' => 'text'
      ),
    ),
    'type' => 'group' //Look here.
  );
  $ashu_options[] = array(
    'name' => '首页推荐区03',
    'id'   => 'Immovable_index_03',
    'desc' => '',
    'std'  => '',
    'subtype' => array(
      array(
        'name' => '标题',
        'id'   => 'Immovable_title',
        'desc' => '推荐内容标题',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => '描述',
        'id'   => 'Immovable_description',
        'desc' => '推荐内容描述',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => '底图',
        'id'   => 'Immovable_url',
        'desc' => '推荐内容底图URL',
        'std'  => '',
        'type' => 'upload'
      ),
      array(
        'name' => '链接',
        'id'   => 'Immovable_link',
        'desc' => '推荐内容链接(请加上http://)',
        'std'  => '',
        'type' => 'text'
      ),
    ),
    'type' => 'group' //Look here.
  );
  $ashu_options[] = array(
    'name' => '首页推荐区04',
    'id'   => 'Immovable_index_04',
    'desc' => '',
    'std'  => '',
    'subtype' => array(
      array(
        'name' => '标题',
        'id'   => 'Immovable_title',
        'desc' => '推荐内容标题',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => '描述',
        'id'   => 'Immovable_description',
        'desc' => '推荐内容描述',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => '底图',
        'id'   => 'Immovable_url',
        'desc' => '推荐内容底图URL',
        'std'  => '',
        'type' => 'upload'
      ),
      array(
        'name' => '链接',
        'id'   => 'Immovable_link',
        'desc' => '推荐内容链接(请加上http://)',
        'std'  => '',
        'type' => 'text'
      ),
    ),
    'type' => 'group' //Look here.
  );
$ashu_options[] = array(
  'name' => '',
  'type' => 'close' //Look here
);

$ashu_options[] = array(
  'name' => '社交设置',
  'id'   => 'tab3_open',
  'type' => 'open' //Look here
);

  $ashu_options[] = array(
    'name' => '底部社交设置',
    'id'   => 'Immovable_Social',
    'desc' => '',
    'std'  => '',
    'subtype' => array(
      array(
        'name' => 'GitHub',
        'id'   => 'Immovable_GitHub',
        'desc' => 'GitHub地址(留空则不显示)',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => 'QQ',
        'id'   => 'Immovable_QQ',
        'desc' => 'QQ(留空则不显示)',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => '微信',
        'id'   => 'Immovable_WeiXin',
        'desc' => '微信(留空则不显示)',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => '新浪微博',
        'id'   => 'Immovable_WeiBo',
        'desc' => '新浪微博(留空则不显示)',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => 'facebook',
        'id'   => 'Immovable_Facebook',
        'desc' => 'facebook(留空则不显示)',
        'std'  => '',
        'type' => 'text'
      ),
      array(
        'name' => 'twitter',
        'id'   => 'Immovable_Twitter',
        'desc' => 'twitter(留空则不显示)',
        'std'  => '',
        'type' => 'text'
      ),
    ),
    'type' => 'group' //Look here.
  );



$ashu_options[] = array(
  'name' => '',
  'type' => 'close' //Look here
);
$option_page = new ashuwp_options_feild($ashu_options, $page_info);
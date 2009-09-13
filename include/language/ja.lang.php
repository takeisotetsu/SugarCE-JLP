<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/******************************************************************************
 * SugarCRM Japanese Language Pack is developed by OpenSourceCRM Inc.
 * Copyright (C) 2007 - 2009 OpenSourceCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
*****************************************************************************/

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array (
//e.g. auf Deutsch 'Contacts'=>'Contakten',
  'language_pack_name' => 'Japanese',
  'moduleList' =>
  array (
    'Home' => 'ホーム',
    'Dashboard' => 'ダッシュボード',
    'Contacts' => '取引先担当者',
    'Accounts' => '取引先',
    'Opportunities' => '商談',
    'Cases' => 'ケース',
    'Notes' => 'ノート',
    'Calls' => 'コール',
    'Emails' => '電子メール',
    'Meetings' => 'ミーティング',
    'Tasks' => 'タスク',
    'Calendar' => 'カレンダー',
    'Leads' => 'リード',
    'Currencies' => '通貨',















    'Activities' => '活動',
    'Bugs' => 'バグトラッカー',
    'Feeds' => 'RSSフィード',
    'iFrames'=>'マイポータル',
    'TimePeriods'=>'期間',
    'Project'=>'プロジェクト',
    'ProjectTask'=>'プロジェクトタスク',
    'Campaigns'=>'キャンペーン',
    'CampaignLog'=>'キャンペーンログ',
    'Documents'=>'ドキュメント',
    'Sync'=>'同期',






    'Users' => 'ユーザ',
    'Releases' => 'リリース',
    'Prospects' => 'ターゲット',
    'Queues' => 'キュー',
    'EmailMarketing' => '電子メールマーケティング',
    'EmailTemplates' => '電子メールテンプレート',
    'ProspectLists' => 'ターゲットリスト',
    'SavedSearch' => '保存済み検索',
    'Trackers' => 'トラッカー',
    'TrackerPerfs' => 'トラッカーパフォーマンス',
    'TrackerSessions' => 'トラッカーセッション',
    'TrackerQueries' => 'トラッカークエリ',
    'FAQ' => 'FAQ',
    'Newsletters' => 'ニュースレター',
    'SugarFeed'=>'Sugarフィード',








        ),
  'moduleListSingular' =>
  array (
    'Home' => 'ホーム',
    'Dashboard' => 'ダッシュボード',
    'Contacts' => '取引先担当者',
    'Accounts' => '取引先',
    'Opportunities' => '商談',
    'Cases' => 'ケース',
    'Notes' => 'ノート',
    'Calls' => 'コール',
    'Emails' => '電子メール',
    'Meetings' => 'ミーティング',
    'Tasks' => 'タスク',
    'Calendar' => 'カレンダー',
    'Leads' => 'リード',









    'Activities' => '活動',
    'Bugs' => 'バグトラッカー',
    'Feeds' => 'RSSフィード',
    'iFrames'=>'マイポータル',
    'TimePeriods'=>'期間',
    'Project'=>'プロジェクト',
    'ProjectTask'=>'プロジェクトタスク',
    'Campaigns'=>'キャンペーン',
    'Documents'=>'ドキュメント',
    'Sync'=>'同期',






    'Users' => 'ユーザ'
        ),

  'checkbox_dom'=> array(
    ''=>'',
    '1'=>'はい',
    '2'=>'いいえ',
  ),

  //e.g. en fran�ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
    'Analyst' => 'アナリスト',
    'Competitor' => '競合企業',
    'Customer' => '顧客',
    'Integrator' => 'インテグレータ',
    'Investor' => '投資家',
    'Partner' => 'パートナー',
    'Press' => '報道関係者',
    'Prospect' => '見込顧客',
    'Reseller' => 'リセラー',
    'Other' => 'その他',
  ),
  //e.g. en espa�ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
    'Apparel' => 'アパレル',
    'Banking' => '銀行',
    'Biotechnology' => 'バイオテクノロジー',
    'Chemicals' => '化学',
    'Communications' => '通信',
    'Construction' => '建設',
    'Consulting' => 'コンサルティング',
    'Education' => '教育',
    'Electronics' => '電気',
    'Energy' => 'エネルギー',
    'Engineering' => 'エンジニアリング',
    'Entertainment' => '娯楽',
    'Environmental' => '環境',
    'Finance' => '金融',
    'Government' => '政府機関',
    'Healthcare' => '医療',
    'Hospitality' => 'サービス',
    'Insurance' => '保険',
    'Machinery' => '機械',
    'Manufacturing' => '製造',
    'Media' => 'メディア',
    'Not For Profit' => '非営利',
    'Recreation' => 'レジャー',
    'Retail' => '小売',
    'Shipping' => '配送',
    'Technology' => 'テクノロジー',
    'Telecommunications' => '電話',
    'Transportation' => '輸送',
    'Utilities' => '公共',
    'Other' => 'その他',
  ),
  'lead_source_default_key' => 'Self Generated',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => '勧誘電話',
    'Existing Customer' => '既存顧客',
    'Self Generated' => '自然発生',
    'Employee' => '社員',
    'Partner' => 'パートナー',
    'Public Relations' => '広報活動',
    'Direct Mail' => 'ダイレクトメール',
    'Conference' => 'カンファレンス',
    'Trade Show' => '展示会',
    'Web Site' => 'Webサイト',
    'Word of mouth' => '口コミ',
    'Email' => '電子メール',
    'Campaign'=>'キャンペーン',
    'Other' => 'その他',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => '既存ビジネス',
    'New Business' => '新規ビジネス',
  ),
  'roi_type_dom' =>
    array (
    'Revenue' => '売上',
    'Investment'=>'投資',
    'Expected_Revenue'=>'期待売上',
    'Budget'=>'予算',

  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => '主要意思決定者',
    'Business Decision Maker' => '管理職意思決定者',
    'Business Evaluator' => '管理評価担当者',
    'Technical Decision Maker' => '技術職意思決定者',
    'Technical Evaluator' => '技術評価担当者',
    'Executive Sponsor' => '役員',
    'Influencer' => 'インフルエンサ',
    'Other' => 'その他',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => '取引先責任者',
    'Alternate Contact' => '取引先担当者',
  ),
  'payment_terms' =>
  array (
    '' => '',
    'Net 15' => '15日以内',
    'Net 30' => '30日以内',
  ),
  'sales_stage_default_key' => 'Prospecting',
  'sales_stage_dom' =>
  array (
    'Prospecting' => '見込み調査中',
    'Qualification' => '見込み判断中',
    'Needs Analysis' => '要分析',
    'Value Proposition' => '価値命題',
    'Id. Decision Makers' => '意思決定者確認中',
    'Perception Analysis' => '現状分析中',
    'Proposal/Price Quote' => '提案/見積中',
    'Negotiation/Review' => '交渉/確認中',
    'Closed Won' => '受注',
    'Closed Lost' => '失注',
  ),
  'in_total_group_stages' => array (
    'Draft' => 'ドラフト',
    'Negotiation' => '交渉中',
    'Delivered' => '出荷済み',
    'On Hold' => '保留中',
    'Confirmed' => '確認済み',
    'Closed Accepted' => '完了',
    'Closed Lost' => '失注',
    'Closed Dead' => '非商談',
  ),
  'sales_probability_dom' => // keys must be the same as sales_stage_dom
  array (
    'Prospecting' => '10',
    'Qualification' => '20',
    'Needs Analysis' => '25',
    'Value Proposition' => '30',
    'Id. Decision Makers' => '40',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Negotiation/Review' => '80',
    'Closed Won' => '100',
    'Closed Lost' => '0',
  ),
  'activity_dom' =>
  array (
    'Call' => 'コール',
    'Meeting' => 'ミーティング',
    'Task' => 'タスク',
    'Email' => '電子メール',
    'Note' => 'ノート',
  ),
  'salutation_dom' =>
      array (
        '' => '',
        'Mr.' => '様',
        'Ms.' => 'Ms.',
        'Mrs.' => 'Mrs.',
        'Dr.' => '先生',
        'Prof.' => '教授',
      ),
  //time is in seconds; the greater the time the longer it takes;
  'reminder_max_time'=>3600,
  'reminder_time_options' => array( 60=> '1分前',
                                  300=> '5分前',
                                  600=> '10分前',
                                  900=> '15分前',
                                  1800=> '30分前',
                                  3600=> '1時間前',
                                 ),

  'task_priority_default' => 'Medium',
  'task_priority_dom' =>
  array (
    'High' => '高',
    'Medium' => '中',
    'Low' => '低',
  ),
  'task_status_default' => 'Not Started',
  'task_status_dom' =>
  array (
    'Not Started' => '未開始',
    'In Progress' => '進行中',
    'Completed' => '完了',
    'Pending Input' => '保留',
    'Deferred' => '延期',
  ),
  'meeting_status_default' => 'Planned',
  'meeting_status_dom' =>
  array (
    'Planned' => '計画済み',
    'Held' => '完了',
    'Not Held' => '未実施',
  ),
  'call_status_default' => 'Planned',
  'call_status_dom' =>
  array (
    'Planned' => '計画済み',
    'Held' => '完了',
    'Not Held' => '未実施',
  ),
  'call_direction_default' => 'Outbound',
  'call_direction_dom' =>
  array (
    'Inbound' => 'インバウンド',
    'Outbound' => 'アウトバウンド',
  ),
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => '新規',
    'Assigned' => 'アサイン済み',
    'In Process' => '進行中',
    'Converted' => 'コンバート済み',
    'Recycled' => '戻し',
    'Dead' => 'デッド',
  ),
   'gender_list' =>
  array (
    'male' => '男性',
    'female' => '女性',
  ),
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'New',
  'case_status_dom' =>
  array (
    'New' => '新規',
    'Assigned' => 'アサイン済み',
    'Closed' => '完了',
    'Pending Input' => '保留',
    'Rejected' => '拒否',
    'Duplicate' => '重複',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => '高',
    'P2' => '中',
    'P3' => '低',
  ),
  'user_status_dom' =>
  array (
    'Active' => 'アクティブ',
    'Inactive' => '非アクティブ',
  ),
  'employee_status_dom' =>
  array (
    'Active' => 'アクティブ',
    'Terminated' => '退職',
    'Leave of Absence' => '休職',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
  ),

    'project_task_priority_options' => array (
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'project_task_priority_default' => 'Medium',

    'project_task_status_options' => array (
        'Not Started' => '未開始',
        'In Progress' => '進行中',
        'Completed' => '完了',
        'Pending Input' => '保留',
        'Deferred' => '延期',
    ),
    'project_task_utilization_options' => array (
        '0' => 'なし',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array (
        'Draft' => 'ドラフト',
        'In Review' => 'レビュー中',
        'Published' => '公開済み',
    ),
    'project_status_default' => 'Draft',

    'project_duration_units_dom' => array (
        'Days' => '日',
        'Hours' => '時間',
    ),

    'project_priority_options' => array (
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'project_priority_default' => 'Medium',

  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Accounts',
  'record_type_display' =>
  array (
    '' => '',
    'Accounts' => '取引先',
    'Opportunities' => '商談',
    'Cases' => 'ケース',
    'Leads' => 'リード',
    'Contacts' => '取引先担当者', // cn (11/22/2005) added to support Emails




    'Bugs' => 'バグトラッカー',
    'Project' => 'プロジェクト',



    'ProjectTask' => 'プロジェクトタスク',
    'Tasks' => 'タスク',
    'Prospects' => 'ターゲット',
  ),

  'record_type_display_notes' =>
  array (

    'Accounts' => '取引先',
    'Contacts' => '取引先担当者',
    'Opportunities' => '商談',
    'Cases' => 'ケース',
    'Leads' => 'リード',






    'Bugs' => 'バグトラッカー',
    'Emails' => '電子メール',
    'Project' => 'プロジェクト',
    'ProjectTask' => 'プロジェクトタスク',
    'Meetings' => 'ミーティング',
    'Calls' => 'コール',








  ),

  'parent_type_display' =>
  array (

    'Accounts' => '取引先',
    'Bugs' => 'バグトラッカー',
    'Cases' => 'ケース',
    'Contacts' => '取引先担当者',
    'Leads' => 'リード',
    'Opportunities' => '商談',



    'Project' => 'プロジェクト',
    'ProjectTask' => 'プロジェクトタスク',
    'Prospects' => 'ターゲット',



    'Tasks' => 'タスク',








  ),







































  'quote_type_dom' =>
  array (
    'Quotes' => '見積',
    'Orders' => '注文',
  ),
  'default_quote_stage_key' => 'Draft',
  'quote_stage_dom' =>
  array (
    'Draft' => 'ドラフト',
    'Negotiation' => '交渉中',
    'Delivered' => '出荷済み',
    'On Hold' => '保留中',
    'Confirmed' => '確認済み',
    'Closed Accepted' => '完了',
    'Closed Lost' => '失注',
    'Closed Dead' => '非商談',
  ),
  'default_order_stage_key' => 'Pending',
  'order_stage_dom' =>
  array (
    'Pending' => '処理中',
    'Confirmed' => '確認済み',
    'On Hold' => '保留中',
    'Shipped' => '出荷済み',
    'Cancelled' => 'キャンセル',
  ),

//Note:  do not translate quote_relationship_type_default_key
//       it is the key for the default quote_relationship_type_dom value
  'quote_relationship_type_default_key' => 'Primary Decision Maker',
  'quote_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => '主要意思決定者',
    'Business Decision Maker' => '管理職意思決定者',
    'Business Evaluator' => '管理評価担当者',
    'Technical Decision Maker' => '技術職意思決定者',
    'Technical Evaluator' => '技術評価担当者',
    'Executive Sponsor' => '役員',
    'Influencer' => 'インフルエンサ',
    'Other' => 'その他',
  ),
  'layouts_dom' =>
  array (
    'Standard' => '見積書',
    'Invoice' => '請求書',
    'Terms' => '支払条件'
  ),

  'issue_priority_default_key' => 'Medium',
  'issue_priority_dom' =>
  array (
    'Urgent' => '緊急',
    'High' => '高',
    'Medium' => '中',
    'Low' => '低',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => '承諾',
    'Duplicate' => '重複',
    'Closed' => '完了',
    'Out of Date' => '期限切れ',
    'Invalid' => '無効',
  ),

  'issue_status_default_key' => 'New',
  'issue_status_dom' =>
  array (
    'New' => '新規',
    'Assigned' => 'アサイン済み',
    'Closed' => '完了',
    'Pending' => '保留',
    'Rejected' => '拒否',
  ),

  'bug_priority_default_key' => 'Medium',
  'bug_priority_dom' =>
  array (
    'Urgent' => '緊急',
    'High' => '高',
    'Medium' => '中',
    'Low' => '低',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => '承諾',
    'Duplicate' => '重複',
    'Fixed' => '修正済み',
    'Out of Date' => '期限切れ',
    'Invalid' => '無効',
    'Later' => '後回し',
  ),
  'bug_status_default_key' => 'New',
  'bug_status_dom' =>
  array (
    'New' => '新規',
    'Assigned' => 'アサイン済み',
    'Closed' => '完了',
    'Pending' => '保留',
    'Rejected' => '拒否',
  ),
   'bug_type_default_key' => 'Bug',
  'bug_type_dom' =>
  array (
    'Defect' => '不具合',
    'Feature' => '仕様',
  ),
 'case_type_dom' =>
  array (
    'Administration' => '管理',
    'Product' => '商品',
    'User' => 'ユーザ',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
    '' => '',
    'Internal' => '内部',
    'Forum' => 'フォーラム',
    'Web' => 'Web',
    'InboundEmail' => '電子メール'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
    '' => '',
    'Accounts' => '取引先',
    'Activities' => '活動',
    'Bug Tracker' => 'バグトラッカー',
    'Calendar' => 'カレンダー',
    'Calls' => 'コール',
    'Campaigns' => 'キャンペーン',
    'Cases' => 'ケース',
    'Contacts' => '取引先担当者',
    'Currencies' => '通貨',
    'Dashboard' => 'ダッシュボード',
    'Documents' => 'ドキュメント',
    'Emails' => '電子メール',
    'Feeds' => 'RSSフィード',
    'Forecasts' => '予算',
    'Help' => 'ヘルプ',
    'Home' => 'ホーム',
    'Leads' => 'リード',
    'Meetings' => 'ミーティング',
    'Notes' => 'ノート',
    'Opportunities' => '商談',
    'Outlook Plugin' => 'Outlookプラグイン',
    'Product Catalog' => '商品カタログ',
    'Products' => '商品',
    'Projects' => 'プロジェクト',
    'Quotes' => '見積',
    'Releases' => 'リリース',
    'RSS' => 'RSSフィード',
    'Studio' => 'スタジオ',
    'Upgrade' => 'アップグレード',
    'Users' => 'ユーザ',
  ),

  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
        '' => '',
        'Planning' => '計画中',
        'Active' => 'アクティブ',
        'Inactive' => '非アクティブ',
        'Complete' => '完了',
        'In Queue' => 'キュー待ち',
        'Sending'=> '送信中',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => '電話営業',
        'Mail' => 'ダイレクトメール',
        'Email' => '電子メール',
        'Print' => '印刷',
        'Web' => 'Web',
        'Radio' => 'ラジオ',
        'Television' => 'テレビ',
        'NewsLetter' => 'ニュースレター',
        ),

  'newsletter_frequency_dom' =>
  array (
        '' => '',
        'Weekly' => '毎週',
        'Monthly' => '毎月',
        'Quarterly' => '毎四半期',
        'Annually' => '毎年',
        ),
        
  'notifymail_sendtype' =>
  array (


    'sendmail' => 'sendmail',


    'SMTP' => 'SMTP',
  ),
  'dom_timezones' => array('-12'=>'(GMT - 12) 日付変更線西側',
                            '-11'=>'(GMT - 11) サモア ミッドウェー島',
                            '-10'=>'(GMT - 10) ハワイ',
                            '-9'=>'(GMT - 9) アラスカ',
                            '-8'=>'(GMT - 8) サンフランシスコ',
                            '-7'=>'(GMT - 7) フェニックス',
                            '-6'=>'(GMT - 6) サスカチェワン',
                            '-5'=>'(GMT - 5) ニューヨーク',
                            '-4'=>'(GMT - 4) サンチャゴ',
                            '-3'=>'(GMT - 3) ブエノスアイレス',
                            '-2'=>'(GMT - 2) 中央大西洋',
                            '-1'=>'(GMT - 1) アゾレス諸島',
                            '0'=>'(GMT)',
                            '1'=>'(GMT + 1) マドリッド',
                            '2'=>'(GMT + 2) アテネ',
                            '3'=>'(GMT + 3) モスクワ',
                            '4'=>'(GMT + 4) カブール',
                            '5'=>'(GMT + 5) エカチェリンブルグ',
                            '6'=>'(GMT + 6) アスタナ',
                            '7'=>'(GMT + 7) バンコク',
                            '8'=>'(GMT + 8) パース',
                            '9'=>'(GMT + 9) 日本',
                            '10'=>'(GMT + 10) ブリスベン',
                            '11'=>'(GMT + 11) ソロモン諸島',
                            '12'=>'(GMT + 12) オークランド',
                            ),
      'dom_cal_month_long'=>array(
                '0'=>"",
                '1'=>"1月",
                '2'=>"2月",
                '3'=>"3月",
                '4'=>"4月",
                '5'=>"5月",
                '6'=>"6月",
                '7'=>"7月",
                '8'=>"8月",
                '9'=>"9月",
                '10'=>"10月",
                '11'=>"11月",
                '12'=>"12月",
                ),
        'dom_cal_month_short'=>array(
                '0'=>"",
                '1'=>"1月",
                '2'=>"2月",
                '3'=>"3月",
                '4'=>"4月",
                '5'=>"5月",
                '6'=>"6月",
                '7'=>"7月",
                '8'=>"8月",
                '9'=>"9月",
                '10'=>"10月",
                '11'=>"11月",
                '12'=>"12月",
                ),
        'dom_cal_day_long'=>array(
                '0'=>"",
                '1'=>"日曜日",
                '2'=>"月曜日",
                '3'=>"火曜日",
                '4'=>"水曜日",
                '5'=>"木曜日",
                '6'=>"金曜日",
                '7'=>"土曜日",
                ),
        'dom_cal_day_short'=>array(
                '0'=>"",
                '1'=>"日",
                '2'=>"月",
                '3'=>"火",
                '4'=>"水",
                '5'=>"木",
                '6'=>"金",
                '7'=>"土",
        ),
    'dom_meridiem_lowercase'=>array(
                'am'=>"am",
                'pm'=>"pm"
        ),
    'dom_meridiem_uppercase'=>array(
                 'AM'=>'AM',
                 'PM'=>'PM'
        ),
    'dom_report_types'=>array(
                'tabular'=>'表形式レポート',
                'summary'=>'サマリレポート',
                'detailed_summary'=>'詳細サマリレポート',
                'Matrix' => 'マトリックスレポート',
        ),
    'dom_email_types'=> array(
        'out'       => '送信済み',
        'archived'  => '保存済み',
        'draft'     => 'ドラフト',
        'inbound'   => 'インバウンド',
        'campaign'  => 'キャンペーン'
    ),
    'dom_email_status' => array (
        'archived'  => '保存済み',
        'closed'    => '完了',
        'draft'     => 'ドラフト',
        'read'      => '既読',
        'replied'   => '返信済み',
        'sent'      => '送信済み',
        'send_error'=> '送信エラー',
        'unread'    => '未読',
    ),
    'dom_email_archived_status' => array (
        'archived'  => '保存済み',
    ),

    'dom_email_server_type' => array(   ''          => '--なし--',
                                        'imap'      => 'IMAP',
                                        'pop3'      => 'POP3',
    ),
    'dom_mailbox_type'      => array(/*''           => '--None Specified--',*/
                                     'pick'     => '作成[任意]',
                                     'createcase'  => 'ケース作成',
                                     'bounce'   => 'バウンス処理',
    ),
    'dom_email_distribution'=> array(''             => '--なし--',
                                     'direct'       => 'ユーザを直接アサイン',
                                     'roundRobin'   => 'ユーザを均等にアサイン',
                                     'leastBusy'    => '稼働率の低いユーザにアサイン',
    ),
    'dom_email_distribution_for_auto_create'=> array('roundRobin'   => 'ユーザを均等にアサイン',
                                                     'leastBusy'    => '稼働率の低いユーザにアサイン',
    ),
    'dom_email_errors'      => array(1 => '直接アサインの場合はユーザは1人のみ選択',
                                     2 => '直接アサインの場合はチェックされたアイテムのみアサイン',
    ),
    'dom_email_bool'        => array('bool_true' => 'はい',
                                     'bool_false' => 'いいえ',
    ),
    'dom_int_bool'          => array(1 => 'はい',
                                     0 => 'いいえ',
    ),
    'dom_switch_bool'       => array ('on' => 'はい',
                                        'off' => 'いいえ',
                                        '' => 'いいえ', ),
    'dom_email_link_type'   => array(   ''          => 'システムデフォルトのメールクライアント',
                                        'sugar'     => 'SugarCRMメールクライアント',
                                        'mailto'    => '外部メールクライアント'),

    'dom_email_editor_option'=> array(  ''          => 'デフォルトメールフォーマット',
                                        'html'      => 'HTMLメール',
                                        'plain'     => 'プレーンテキストメール'),


    'schedulers_times_dom'  => array(   'not run'       => '実行時間を経過、未実施',
                                        'ready'         => '準備完了',
                                        'in progress'   => '処理中',
                                        'failed'        => '失敗',
                                        'completed'     => '完了',
                                        'no curl'       => '実行不可: cURLライブラリがありません',
    ),

    'scheduler_status_dom' =>
        array (
        'Active' => 'アクティブ',
        'Inactive' => '非アクティブ',
        ),

    'scheduler_period_dom' =>
        array (
        'min' => '分',
        'hour' => '時間',
        ),

    'forecast_schedule_status_dom' =>
    array (
    'Active' => 'アクティブ',
    'Inactive' => '非アクティブ',
  ),
    'forecast_type_dom' =>
    array (
    'Direct' => 'ダイレクト',
    'Rollup' => 'ロールアップ',
  ),

    'document_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'マーケティング',
    'Knowledege Base' => 'ナレッジベース',
    'Sales' => '営業',
  ),

    'document_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'マーケティング資料',
    'Product Brochures' => '製品パンフレット',
    'FAQ' => 'FAQ',
  ),

    'document_status_dom' =>
    array (
    'Active' => 'アクティブ',
    'Draft' => 'ドラフト',
    'FAQ' => 'FAQ',
    'Expired' => '期限切れ',
    'Under Review' => 'レビュー中',
    'Pending' => '待機',
  ),
  'document_template_type_dom' =>
  array(
    ''=>'',
    'mailmerge'=>'メールマージ',
    'eula'=>'EULA',
    'nda'=>'NDA',
    'license'=>'ライセンス契約',
  ),
    'dom_meeting_accept_options' =>
    array (
    'accept' => '承諾',
    'decline' => '拒否',
    'tentative' => '仮',
  ),
    'dom_meeting_accept_status' =>
    array (
    'accept' => '承諾',
    'decline' => '拒否',
    'tentative' => '仮',
    'none'      => 'なし',
  ),





















































































































































































































































































































































































































    'duration_intervals' => array('0'=>'00',
                                    '15'=>'15',
                                    '30'=>'30',
                                    '45'=>'45'),


// deferred
/*// QUEUES MODULE DOMs
'queue_type_dom' => array(
    'Users' => 'Users',



    'Mailbox' => 'Mailbox',
),
*/

//prospect list type dom
  'prospect_list_type_dom' =>
  array (
    'default' => 'デフォルト',
    'seed' => 'シード',
    'exempt_domain' => '禁止リスト - ドメイン',
    'exempt_address' => '禁止リスト - 電子メールアドレス',
    'exempt' => '禁止リスト - ID',
    'test' => 'テスト',
  ),

  'email_marketing_status_dom' =>
  array (
    '' => '',
    'active'=>'アクティブ',
    'inactive'=>'非アクティブ'
  ),

  'campainglog_activity_type_dom' =>
  array (
    ''=>'',
    'targeted' => '送付済み/試行回数',
    'send error'=>'送信エラー: 他',
    'invalid email'=>'送信エラー: 不正アドレス',
    'link'=>'リンクからクリック',
    'viewed'=>'閲覧済み',
    'removed'=>'脱退済み',
    'lead'=>'リード作成済み',
    'contact'=>'取引先担当者作成済み',
    'blocked'=>'電子メールアドレスまたはドメインによって抑止',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => '取引先担当者',
    'Users'=>'ユーザ',
    'Prospects'=>'ターゲット',
    'Leads'=>'リード',
  ),

  'merge_operators_dom' => array (
    'like'=>'に次の内容を含む',
    'exact'=>'正確に一致',
    'start'=>'以下で始まる',
  ),

  'custom_fields_importable_dom' => array (
    'true'=>'はい',
    'false'=>'いいえ',
    'required'=>'必須',
  ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'不可',
        1=>'可',





  ),

  'navigation_paradigms' => array(
        'm'=>'モジュール',
        'gm'=>'グループ化モジュール',
  ),











































    'projects_priority_options' => array (
        'high'      => '高',
        'medium'    => '中',
        'low'       => '低',
    ),

    'projects_status_options' => array (
        'notstarted'    => '未開始',
        'inprogress'    => '進行中',
        'completed'     => '完了',
    ),

    // strings to pass to Flash charts
    'chart_strings' => array (
        'expandlegend'      => '説明文を表示',
        'collapselegend'    => '説明文を閉じる',
        'clickfordrilldown' => 'ドリルダウンをクリック',
        'drilldownoptions'  => 'ドリルダウンオプション',
        'detailview'        => '詳細...',
        'piechart'          => '円グラフ',
        'groupchart'        => 'グループグラフ',
        'stackedchart'      => '積み重ねグラフ',
        'barchart'			=> '縦棒グラフ',
        'horizontalbarchart'   => '横棒グラフ',
        'linechart'         => '線グラフ',
        'noData'            => 'データがありません',
        'print'				=> '印刷',
        'pieWedgeName'      => 'セクション',
    ),










































































































    'release_status_dom' =>
    array (
        'Active' => 'アクティブ',
        'Inactive' => '非アクティブ',
    ),
);

$app_strings = array (
    'LBL_SORT'                              => 'ソート',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER'         => 'サーバを追加...',

    'LBL_ROUTING_ADD_RULE'                  => 'ルールを追加',
    'LBL_ROUTING_ALL'                       => 'すべての',
    'LBL_ROUTING_ANY'                       => '任意の',
    'LBL_ROUTING_BREAK'                     => '-',
    'LBL_ROUTING_BUTTON_CANCEL'             => 'キャンセル',
    'LBL_ROUTING_BUTTON_SAVE'               => '保存',

    'LBL_ROUTING_ACTIONS_COPY_MAIL'         => '次のフォルダへメールをコピー',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN'       => 'Sugarオブジェクトを削除',
    'LBL_ROUTING_ACTIONS_DELETE_FILE'       => 'ファイルを削除',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL'       => 'メールを削除',
    'LBL_ROUTING_ACTIONS_FORWARD'           => '次のアドレスへメールを転送',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED'      => 'メールにフラグをつける',
    'LBL_ROUTING_ACTIONS_MARK_READ'         => '既読にする',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD'       => '未読にする',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL'         => '次のフォルダへメールを移動',
    'LBL_ROUTING_ACTIONS_PEFORM'            => '以下のアクションを実行',
    'LBL_ROUTING_ACTIONS_REPLY'             => '次のテンプレートを使用してメールに返信',

    'LBL_ROUTING_CHECK_RULE'                => "エラーが見つかりました:\n",
    'LBL_ROUTING_CHECK_RULE_DESC'           => 'すべてのフィールドがマークされているかを確認してください。',
    'LBL_ROUTING_CONFIRM_DELETE'            => "このルールを本当に削除しますか?\nこの操作は取り消しできません。",

    'LBL_ROUTING_FLAGGED'                   => 'が指定されている',
    'LBL_ROUTING_FORM_DESC'                 => '保存されたルールはすぐに有効になります。',
    'LBL_ROUTING_FW'                        => 'FW: ',
    'LBL_ROUTING_LIST_TITLE'                => 'ルール',
    'LBL_ROUTING_MATCH'                     => 'もし',
    'LBL_ROUTING_MATCH_2'                   => '以下の条件が合致:',

    'LBL_ROUTING_MATCH_CC_ADDR'             => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION'         => '本文',
    'LBL_ROUTING_MATCH_FROM_ADDR'           => 'From',
    'LBL_ROUTING_MATCH_NAME'                => '件名',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH'       => '高優先度',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL'     => '中優先度',
    'LBL_ROUTING_MATCH_PRIORITY_LOW'        => '低優先度',
    'LBL_ROUTING_MATCH_TO_ADDR'             => 'To',
    'LBL_ROUTING_MATCH_TYPE_MATCH'          => 'に次の内容を含む',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH'      => 'に次の内容を含まない',

    'LBL_ROUTING_NAME'                      => 'ルール名',
    'LBL_ROUTING_NEW_NAME'                  => '新ルール',
    'LBL_ROUTING_ONE_MOMENT'                => 'しばらくお待ちください...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS'  => '以下はオリジナルのメッセージです。',
    'LBL_ROUTING_RE'                        => 'RE: ',
    'LBL_ROUTING_SAVING_RULE'               => 'ルールを保存中',
    'LBL_ROUTING_SUB_DESC'                  => 'チェックされたルールは有効です。編集するには名前をクリックしてください。',
    'LBL_ROUTING_TO'                        => 'から',
    'LBL_ROUTING_TO_ADDRESS'                => '送信先アドレス',
    'LBL_ROUTING_WITH_TEMPLATE'             => 'テンプレートと共に',

	'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => '会社電話、および住所情報の各フィールドがすでに入力されています。取引先に登録された情報で上書きする場合はOKボタンを、そうでない場合はキャンセルボタンをクリックしてください。',

    'LBL_EMAIL_ACCOUNTS_EDIT'               => '編集',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS'     => 'Gmailのデフォルトをセット',
    'LBL_EMAIL_ACCOUNTS_NAME'               => '名前',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND'           => 'アウトバウンドメールサーバ',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE'           => 'メール送信エージェント',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ'       => 'SMTP認証を使用',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS'           => 'SMTPパスワード',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT'           => 'SMTPポート',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER'         => 'SMTPサーバ',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL'            => '接続時にSSLを使用',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER'           => 'SMTPユーザ名',
    'LBL_EMAIL_ACCOUNTS_TITLE'              => '電子メールアカウント管理',

    'LBL_EMAIL_ADD'                         => 'アドレスを追加',

    'LBL_EMAIL_ADDRESS_BOOK_ADD'            => '追加',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST'       => 'リストを追加',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'     => '電子メール',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT'=> '今回は取引先担当者',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER'         => 'フィルタ',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME'     => '名',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME'      => '姓',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS'    => '私の取引先担当者',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS'       => '私のメーリングリスト',
    'LBL_EMAIL_ADDRESS_BOOK_NAME'           => '名前',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND'      => 'アドレスが見つかりません',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD'   => '保存してアドレス帳に追加',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH'         => '検索',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE'   => 'アドレス帳のエントリを選択',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE'          => 'アドレス帳',
    'LBL_EMAIL_REPORTS_TITLE'               => 'レポート',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON'     => '<img src=themes/default/images/icon_email_addressbook.gif align=absmiddle border=0> アドレス帳',

    'LBL_EMAIL_ADDRESSES'                   => '電子メールアドレス',
    'LBL_EMAIL_ADDRESS_PRIMARY'             => '電子メール',
    'LBL_EMAIL_ADDRESSES_TITLE'             => '電子メールアドレス',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR'            => 'Sugarへインポート',
    'LBL_EMAIL_ASSIGNMENT'                  => 'アサイン先',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL'        => 'メールに添付',
    'LBL_EMAIL_ATTACHMENT'                  => '添付',
    'LBL_EMAIL_ATTACHMENTS'                 => 'ファイルを添付',
    'LBL_EMAIL_ATTACHMENTS2'                => 'Sugarドキュメントを添付',
    'LBL_EMAIL_ATTACHMENTS3'                => 'テンプレート添付ファイル',
    'LBL_EMAIL_ATTACHMENTS_FILE'            => 'ファイル',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT'        => 'ドキュメント',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED'         => '埋め込み',
    'LBL_EMAIL_BCC'                         => 'BCC',
    'LBL_EMAIL_CANCEL'                      => 'キャンセル',
    'LBL_EMAIL_CC'                          => 'CC',
    'LBL_EMAIL_CHARSET'                     => '文字コードセット',
    'LBL_EMAIL_CHECK'                       => '電子メール確認',
    'LBL_EMAIL_CHECKING_NEW'                => '新着電子メールをチェック',
    'LBL_EMAIL_CHECKING_DESC'               => '新規メールをチェック中。<br><br>これが最初のチェックの場合、時間がかかることがあります。',
    'LBL_EMAIL_CLOSE'                       => '完了',
    'LBL_EMAIL_COFFEE_BREAK'                => '新規メールをチェック中。<br><br>大量にメールがある場合は時間がかかることがあります。',
    'LBL_EMAIL_COMMON'                      => '共通',

    'LBL_EMAIL_COMPOSE'                     => '電子メール作成',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS'   => 'このメールの受信者を指定してください。',
    'LBL_EMAIL_COMPOSE_LINK_TO'             => 'を関連付ける',
    'LBL_EMAIL_COMPOSE_NO_BODY'             => 'このメールには本文がありません。送信しますか?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT'          => 'このメールには件名がありません。送信しますか?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL'  => '(題名なし)',
    'LBL_EMAIL_COMPOSE_READ'                => '読んで電子メールを作成',
    'LBL_EMAIL_COMPOSE_SEND_FROM'           => 'メールアカウントから送信',
    'LBL_EMAIL_COMPOSE_OPTIONS'             => 'オプション',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS'     => 'To、CC、BCC欄に正しいメールアドレスを入力してください。',

    'LBL_EMAIL_CONFIRM_CLOSE'               => 'この電子メールを破棄しますか?',
    'LBL_EMAIL_CONFIRM_DELETE'              => 'これらのエントリをアドレス帳から削除しますか?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE'    => 'このシグネチャを削除しますか?',

    'LBL_EMAIL_CREATE_NEW'                  => '--保存時に作成--',

    'LBL_EMAIL_DATE_SENT_BY_SENDER'         => '送信者が送信した日',
	'LBL_EMAIL_DATE_RECEIVED'               => '受信日',
    'LBL_EMAIL_ASSIGNED_TO_USER'            =>'アサイン先ユーザ',
    'LBL_EMAIL_DATE_TODAY'                  => '今日',
    'LBL_EMAIL_DATE_YESTERDAY'              => '昨日',
    'LBL_EMAIL_DD_TEXT'                     => '電子メールが選択されました。',
    'LBL_EMAIL_DEFAULTS'                    => 'デフォルト',
    'LBL_EMAIL_DELETE'                      => '削除',
    'LBL_EMAIL_DELETE_CONFIRM'              => '選択したメッセージを削除しますか?',
    'LBL_EMAIL_DELETE_SUCCESS'              => '電子メールは削除されました。',
    'LBL_EMAIL_DELETING_MESSAGE'            => 'メッセージを削除しています',
    'LBL_EMAIL_DETAILS'                     => '詳細',
    'LBL_EMAIL_DISPLAY_MSG'                 => '{2} 件中 {0} - {1} の電子メールを表示中',
    'LBL_EMAIL_ADDR_DISPLAY_MSG'            => '{2} 中の {0} - {1} のメールアドレスを表示中',

    'LBL_EMAIL_EDIT_CONTACT'                => '取引先担当者を編集',
    'LBL_EMAIL_EDIT_CONTACT_WARN'           => '取引先担当者に対して適用する場合は、主となる住所が使用されます。',
    'LBL_EMAIL_EDIT_MAILING_LIST'           => 'メーリングリストを編集',

    'LBL_EMAIL_EMPTYING_TRASH'              => 'ゴミ箱を空にしています',
    'LBL_EMAIL_DELETING_OUTBOUND'           => 'アウトバウンド用メールサーバを削除',
    'LBL_EMAIL_CLEARING_CACHE_FILES'        => 'キャッシュファイルを削除',
    'LBL_EMAIL_EMPTY_MSG'                   => '表示するメールがありません。',
    'LBL_EMAIL_EMPTY_ADDR_MSG'              => '表示するメールアドレスがありません。',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER'      => 'フォルダ名はユニークで空白以外である必要があります。',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER'   => 'フォルダを削除できません。メールボックスが、当該フォルダかそのサブフォルダと紐づいています。',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE'      => '状況から意図されたフォルダを決定することができません。再度試してください。',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS'     => '設定を確認してください。',
    'LBL_EMAIL_ERROR_CONTACT_NAME'          => '姓を入力しているかを確認してください。',
    'LBL_EMAIL_ERROR_DESC'                  => 'エラーが見つかりました: ',
    'LBL_EMAIL_DELETE_ERROR_DESC'           => 'この操作を行う権限を持っていません。サイト管理者に連絡してください。',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'      => 'Sugarフォルダの名前はユニークである必要があります。',
    'LBL_EMAIL_ERROR_EMPTY'                 => '検索条件を入力してください。',
    'LBL_EMAIL_ERROR_GENERAL_TITLE'         => 'エラーが発生しました。',
    'LBL_EMAIL_ERROR_LIST_NAME'             => 'その名前の電子メールリストは既に存在します。',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED'       => 'サーバからメッセージが削除されました。',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'  => 'メッセージはサーバから削除されるか異なるフォルダに移動されます。',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION'  => 'メールサーバへの接続に失敗しました。サーバ管理者に連絡してください。',
    'LBL_EMAIL_ERROR_MOVE'                  => '電子メールやメールアカウントをサーバ間で移動することはサポートされていません。',
    'LBL_EMAIL_ERROR_MOVE_TITLE'            => '移動エラー',
    'LBL_EMAIL_ERROR_NAME'                  => '名前は必須です。',
    'LBL_EMAIL_ERROR_FROM_ADDRESS'          => 'Fromアドレスが必要です。',
    'LBL_EMAIL_ERROR_NO_FILE'               => 'ファイルを提供してください。',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAPフォルダの名前を変えることはサポートされていません。',
    'LBL_EMAIL_ERROR_SERVER'                => 'メールサーバのアドレスは必須です。',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT'          => 'このメールアカウントはまだ保存されていません。',
    'LBL_EMAIL_ERROR_TIMEOUT'               => 'メールサーバとの通信中に問題が発生しました。',
    'LBL_EMAIL_ERROR_USER'                  => 'ログイン名は必須です。',
    'LBL_EMAIL_ERROR_PASSWORD'              => 'パスワードは必須です。',
    'LBL_EMAIL_ERROR_PORT'                  => 'メールサーバのポート番号は必須です。',
    'LBL_EMAIL_ERROR_PROTOCOL'              => 'サーバのプロトコルは必須です。',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER'      => '監視フォルダは必須です。',
    'LBL_EMAIL_ERROR_TRASH_FOLDER'          => 'ゴミ箱フォルダは必須です。',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'       => 'この情報は有効ではありません。',

    'LBL_EMAIL_FOLDERS'                     => '<img src=themes/default/images/icon_email_folder.gif align=absmiddle border=0> フォルダ',
    'LBL_EMAIL_FOLDERS_ACTIONS'             => 'へ移動',
    'LBL_EMAIL_FOLDERS_ADD'                 => '追加',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE'    => '新たなフォルダを追加',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER'      => '新しいグループフォルダを追加',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO'         => 'このフォルダに追加',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME'         => 'このフォルダは変更できません',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM'      => 'このフォルダを本当に削除しますか?\nこの処理は取り消しできません\nフォルダの削除は、そのフォルダに含まれるすべてのフォルダも削除します。',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER'          => '新しいフォルダ',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE'       => 'このアクションを実行する前にフォルダを選択してください。',
    'LBL_EMAIL_FOLDERS_TITLE'               => 'Sugarフォルダ管理',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER'    => 'グループを使用する',




    'LBL_EMAIL_FORWARD'                     => '転送',
    'LBL_EMAIL_DELIMITER'                   => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS'             => '[[total]] 件中 [[count]] 件のEメールをダウンロードしました。',
    'LBL_EMAIL_FOUND'                       => '検出',
    'LBL_EMAIL_FROM'                        => 'From',
    'LBL_EMAIL_GROUP'                       => 'グループ',
    'LBL_EMAIL_UPPER_CASE_GROUP'            => 'グループ',
    'LBL_EMAIL_HOME_FOLDER'                 => 'ホーム',
    'LBL_EMAIL_HTML_RTF'                    => 'HTMLを送信',
    'LBL_EMAIL_IE_DELETE'                   => 'メールアカウントを削除中',
    'LBL_EMAIL_IE_DELETE_SIGNATURE'         => 'シグネチャを削除中',
    'LBL_EMAIL_IE_DELETE_CONFIRM'           => 'このメールアカウントを削除しても良いですか?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL'        => '削除しました。',
    'LBL_EMAIL_IE_SAVE'                     => 'メールアカウントの情報を保存しています。',
    'LBL_EMAIL_IMPORTING_EMAIL'             => '電子メールを取り込んでいます',
    'LBL_EMAIL_IMPORT_EMAIL'                => 'Sugarへインポート',
    'LBL_EMAIL_IMPORT_SETTINGS'                => 'インポート設定',
    'LBL_EMAIL_INVALID'                     => '無効',





    'LBL_EMAIL_LOADING'                     => '読み込み中...',
    'LBL_EMAIL_MARK'                        => 'マーク',
    'LBL_EMAIL_MARK_FLAGGED'                => 'フラグをつける',
    'LBL_EMAIL_MARK_READ'                   => '既読とする',
    'LBL_EMAIL_MARK_UNFLAGGED'              => 'フラグをはずす',
    'LBL_EMAIL_MARK_UNREAD'                 => '未読とする',
    'LBL_EMAIL_ASSIGN_TO'                   => 'アサイン先',

    'LBL_EMAIL_MENU_ADD_FOLDER'             => 'フォルダを追加',
    'LBL_EMAIL_MENU_COMPOSE'                => 'このアドレス宛にメールを作成',
    'LBL_EMAIL_MENU_DELETE_FOLDER'          => 'フォルダを削除',
    'LBL_EMAIL_MENU_EDIT'                   => '編集',
    'LBL_EMAIL_MENU_EMPTY_TRASH'            => 'ゴミ箱を空にする',
    'LBL_EMAIL_MENU_SYNCHRONIZE'            => '同期',
    'LBL_EMAIL_MENU_CLEAR_CACHE'            => 'キャッシュファイルを削除',
    'LBL_EMAIL_MENU_REMOVE'                 => '削除',
    'LBL_EMAIL_MENU_RENAME'                 => '名前を変更',
    'LBL_EMAIL_MENU_RENAME_FOLDER'          => 'フォルダをリネーム',
    'LBL_EMAIL_MENU_RENAMING_FOLDER'        => 'フォルダの名前を変更中',
    'LBL_EMAIL_MENU_MAKE_SELECTION'         => 'この操作を試みる前に選択してください。',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER'        => 'フォルダを作成(リモートまたはSugarで)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE'           => 'このメールをSugarCRMへ保存',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST'   => '選択されたメーリングリストに電子メールを送信',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE'   => '取引先担当者に電子メールを送信',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE'    => '取引先担当者を削除',
    'LBL_EMAIL_MENU_HELP_DELETE'            => 'これらの電子メールを削除',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER'     => 'フォルダを削除(リモートまたはSugarで)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT'      => '取引先担当者を編集',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST'         => 'メーリングリストを編集',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH'       => 'アカウントのすべてのゴミ箱フォルダを空にする',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED'      => 'これらの電子メールにフラグをつける',
    'LBL_EMAIL_MENU_HELP_MARK_READ'         => 'これらの電子メールを既読にする',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED'    => 'これらの電子メールのフラグを外す',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD'       => 'これらの電子メールを未読にする',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST'       => 'メーリングリストを削除する',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER'     => 'フォルダをリネームする(リモートまたはSugarで)',
    'LBL_EMAIL_MENU_HELP_REPLY'             => 'これらのメールに返信する',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL'         => 'これらのメールのすべての受信に返信する',

    'LBL_EMAIL_MESSAGES'                    => 'メッセージ',

    'LBL_EMAIL_ML_NAME'                     => 'メーリングリスト名',
    'LBL_EMAIL_ML_ADDRESSES_1'              => '選択されたメーリングリストアドレス',
    'LBL_EMAIL_ML_ADDRESSES_2'              => '有効なメーリングリストアドレス',

    'LBL_EMAIL_MULTISELECT'                 => '複数選択するために<b>Ctrlを押しながらクリック</b>してください<br />(Macユーザは<b>CMDを押しながらクリック</b>)',

    'LBL_EMAIL_NO'                          => 'いいえ',

    'LBL_EMAIL_OK'                          => 'OK',
    'LBL_EMAIL_ONE_MOMENT'                  => 'しばらくお待ちください...',
    'LBL_EMAIL_OPEN_ALL'                    => '複数のメッセージを開く',
    'LBL_EMAIL_OPTIONS'                     => 'オプション',
    'LBL_EMAIL_OPT_OUT'                     => 'メール不可',
    'LBL_EMAIL_PAGE_AFTER'                  => ' {0} 中',
    'LBL_EMAIL_PAGE_BEFORE'                 => 'ページ',
    'LBL_EMAIL_PERFORMING_TASK'             => 'タスクを実行中',
    'LBL_EMAIL_PRIMARY'                     => 'メインアドレス',
    'LBL_EMAIL_PRINT'                       => '印刷',

    'LBL_EMAIL_QC_BUGS'                     => 'バグトラッカー',
    'LBL_EMAIL_QC_CASES'                    => 'ケース',
    'LBL_EMAIL_QC_LEADS'                    => 'リード',
    'LBL_EMAIL_QC_CONTACTS'                 => '取引先担当者',
    'LBL_EMAIL_QC_TASKS'                    => 'タスク',
    'LBL_EMAIL_QUICK_CREATE'                => 'クイック作成',

    'LBL_EMAIL_REBUILDING_FOLDERS'          => 'フォルダを再構築中',
    'LBL_EMAIL_RELATE_TO'                   => '関連付け',
    'LBL_EMAIL_VIEW_RELATIONSHIPS'          => '関連を参照',
    'LBL_EMAIL_RECORD'          			=> 'Eメールレコード',
    'LBL_EMAIL_REMOVE'                      => '削除',
    'LBL_EMAIL_REPLY'                       => '返信',
    'LBL_EMAIL_REPLY_ALL'                   => '全員に返信',
    'LBL_EMAIL_REPLY_TO'                    => '返信',
    'LBL_EMAIL_RETRIEVING_LIST'             => 'メーリングリストを取得中',
    'LBL_EMAIL_RETRIEVING_MESSAGE'          => 'メッセージ',
    'LBL_EMAIL_RETRIEVING_RECORD'           => 'Eメールを取得',
    'LBL_EMAIL_SELECT_ONE_RECORD'           => 'Eメールは一つだけ選択してください',
    'LBL_EMAIL_RETURN_TO_VIEW'              => '直前のモジュールへ戻りますか?',
    'LBL_EMAIL_REVERT'                      => '戻す',
    'LBL_EMAIL_RELATE_EMAIL'                => '関連Eメール',

    'LBL_EMAIL_RULES_TITLE'                 => 'ルール管理',

    'LBL_EMAIL_SAVE'                        => '保存',
    'LBL_EMAIL_SAVE_AND_REPLY'              => '保存して返信',
    'LBL_EMAIL_SAVE_DRAFT'                  => 'ドラフト保存',

    'LBL_EMAIL_SEARCHING'                   => '検索を実行中',
    'LBL_EMAIL_SEARCH'                      => '<img src=themes/default/images/Search.gif align=absmiddle border=0> 検索',
    'LBL_EMAIL_SEARCH_ADVANCED'             => '詳細検索',
    'LBL_EMAIL_SEARCH_DATE_FROM'            => '以下の指定日以降',
    'LBL_EMAIL_SEARCH_DATE_UNTIL'           => '以下の指定日まで',
    'LBL_EMAIL_SEARCH_FULL_TEXT'            => '本文テキスト',
    'LBL_EMAIL_SEARCH_NO_RESULTS'           => '検索条件に合致する結果はありません。',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE'        => '検索結果',
    'LBL_EMAIL_SEARCH_TITLE'                => '基本検索',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS'       => 'メールアカウントを検索',

    'LBL_EMAIL_SELECT'                      => '選択',

    'LBL_EMAIL_SEND'                        => '送信',
    'LBL_EMAIL_SENDING_EMAIL'               => '電子メールを送信中',

    'LBL_EMAIL_SETTINGS'                    => '設定',
    'LBL_EMAIL_SETTINGS_2_ROWS'             => '2行',
    'LBL_EMAIL_SETTINGS_3_COLS'             => '3列',
    'LBL_EMAIL_SETTINGS_LAYOUT'             => 'レイアウトスタイル',
    'LBL_EMAIL_SETTINGS_ACCOUNTS'           => 'メールアカウント',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT'        => 'クリア',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT'        => '閲覧時にメールをインポート',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL'     => '新着メールをチェック',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE'     => 'プレビューペインを使用',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP'      => 'ポップアップウィンドウを使用',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM'        => 'ページごとに表示するメールの数',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT'       => 'メールアカウントの編集',
    'LBL_EMAIL_SETTINGS_FOLDERS'            => 'フォルダ',
    'LBL_EMAIL_SETTINGS_FROM_ADDR'          => '送信元アドレス',
    'LBL_EMAIL_SETTINGS_FROM_NAME'          => '送信元名',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN'        => 'フルスクリーン',
    'LBL_EMAIL_SETTINGS_FULL_SYNC'          => 'すべてのアカウントを同期',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC'     => '実行するとすべてのアカウントで内容が同期されます。',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN'     => 'すべてのアカウントに対する同期を実行しますか?\n多くのアカウントがある場合は多少時間がかかります。',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP'    => 'シフトキーかコントロールキーを押して複数フォルダを選択してください。',
    'LBL_EMAIL_SETTINGS_GENERAL'            => '一般',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS'      => '利用できるグループフォルダ',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE'   => 'グループフォルダを作成',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'グループフォルダを保存中',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP'   => 'グループフォルダを検索中',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'グループフォルダを編集',

    'LBL_EMAIL_SETTINGS_NAME'               => '名前',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH'    => 'これらの設定を有効にするには画面のリフレッシュが必要',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'アカウントを取得中',
    'LBL_EMAIL_SETTINGS_RULES'              => 'ルール',
    'LBL_EMAIL_SETTINGS_SAVED'              => '設定が保存されました。\n\n新たな設定を有効にするにはページをリロードする必要があります。',
    'LBL_EMAIL_SETTINGS_SAVE_OUTBOUND'      => '送信メールを「送信済み」フォルダに保存',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS'      => '電子メールをテキストで送信',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS'    => '有効なアカウント',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST'   => 'ページごとに表示するメールの数',
    'LBL_EMAIL_SETTINGS_TAB_POS'            => 'タブを下部に表示',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT'       => '表示設定',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES'  => '初期設定',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV'         => '拡張オプションを表示',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS'       => '利用できるユーザフォルダ',

    'LBL_EMAIL_SHOW_READ'                   => 'すべてを表示',
    'LBL_EMAIL_SHOW_UNREAD_ONLY'            => '未読のみ表示',
    'LBL_EMAIL_SIGNATURES'                  => 'シグネチャ',
    'LBL_EMAIL_SIGNATURE_CREATE'            => 'シグネチャを作成',
    'LBL_EMAIL_SIGNATURE_NAME'              => 'シグネチャ名',
    'LBL_EMAIL_SIGNATURE_TEXT'              => 'シグネチャ本文',
    'LBL_EMAIL_SPACER_MAIL_SERVER'          => '[ リモートフォルダ ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER'         => '[ Sugarフォルダ ]',
    'LBL_EMAIL_SUBJECT'                     => '件名',
    'LBL_EMAIL_TO'                     		=> 'To',
    'LBL_EMAIL_SUCCESS'                     => '成功',
    'LBL_EMAIL_SUGAR_FOLDER'                => 'Sugarフォルダ',



    'LBL_EMAIL_TEMPLATES'                   => 'テンプレート',
    'LBL_EMAIL_TEXT_FIRST'                  => '最初のページ',
    'LBL_EMAIL_TEXT_PREV'                   => '前のページ',
    'LBL_EMAIL_TEXT_NEXT'                   => '次のページ',
    'LBL_EMAIL_TEXT_LAST'                   => '最後のページ',
    'LBL_EMAIL_TEXT_REFRESH'                => '更新',
    'LBL_EMAIL_TO'                          => 'To',
    'LBL_EMAIL_TOGGLE_LIST'                 => 'リストを切替',
    'LBL_EMAIL_VIEW'                        => '閲覧',
    'LBL_EMAIL_VIEWS'                       => 'ビュー一覧',
    'LBL_EMAIL_VIEW_HEADERS'                => 'ヘッダを表示',
    'LBL_EMAIL_VIEW_PRINTABLE'              => '印刷可能バージョン',
    'LBL_EMAIL_VIEW_RAW'                    => '電子メールの元データを表示',
    'LBL_EMAIL_VIEW_UNSUPPORTED'            => 'この機能はPOP3を使用する場合はサポートされません。',
    'LBL_DEFAULT_LINK_TEXT'                 => 'デフォルトリンクテキスト',
    'LBL_EMAIL_YES'                         => 'はい',

    'LBL_EMAIL_CHECK_INTERVAL_DOM'          => array(
        '-1' => "手動",
        '5' => '5分毎',
        '15' => '15分毎',
        '30' => '30分毎',
        '60' => '1時間毎'
    ),
    'LBL_EMAIL_SETTING_NUM_DOM'             => array(
        '10'    => '10',
        '20'    => '20',
        '50'    => '50'
    ),

    'LBL_EMAIL_MESSAGE_NO'                  => 'メッセージNo',
    'LBL_EMAIL_IMPORT_SUCCESS'              => 'インポートに成功しました',
    'LBL_EMAIL_IMPORT_FAIL'                 => 'インポートに失敗しました。対象メッセージはすでにインポート済みかサーバから削除されています。',

    'LBL_LINK_NONE'=> 'なし',
    'LBL_LINK_ALL'=> 'すべての',
    'LBL_LINK_RECORDS'=> 'レコード',
    'LBL_LINK_SELECT'=> '選択',



















    'ERR_CREATING_FIELDS' => '追加詳細フィールドに入力する際にエラーがありました: ',
    'ERR_CREATING_TABLE' => 'テーブルを作成する際にエラーがありました: ',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'  => "小数点シンボルに1000位セパレータと同じ文字を指定することはできません。\\n\\n小数点シンボルを修正してください。",
    'ERR_DELETE_RECORD' => '取引先担当者を削除するにはレコード番号を指定する必要があります。',
    'ERR_EXPORT_DISABLED' => 'エクスポートを無効',
    'ERR_EXPORT_TYPE' => 'エクスポート中にエラー ',
    'ERR_INVALID_AMOUNT' => '有効な数字を入れてください',
    'ERR_INVALID_DATE_FORMAT' => '有効日付フォーマット: ',
    'ERR_INVALID_DATE' => '有効な日を入れてください',
    'ERR_INVALID_DAY' => '有効な曜日を入れてください',
    'ERR_INVALID_EMAIL_ADDRESS' => '無効な電子メールアドレスです',
    'ERR_INVALID_FILE_REFERENCE' => '不正なファイル参照',
    'ERR_INVALID_HOUR' => '有効な時間を入れてください',
    'ERR_INVALID_MONTH' => '有効な月を入れてください',
    'ERR_INVALID_TIME' => '有効な日時を入れてください',
    'ERR_INVALID_YEAR' => '有効な年を4桁で入れてください',
    'ERR_NEED_ACTIVE_SESSION' => 'コンテンツのエクスポートにはアクティブなセッションが必要です。',
    'ERR_NO_HEADER_ID' => 'この機能はこのテーマでは利用できません。',
    'ERR_NOT_ADMIN' => "管理エリアへのアクセスが認められていません。",
    'ERR_MISSING_REQUIRED_FIELDS' => '必要なフィールドが見つかりません:',
    'ERR_INVALID_VALUE' => '不正な値:',
    'ERR_NO_SUCH_FILE' =>'システムにファイルが存在しません。',
    'ERR_NO_SINGLE_QUOTE' => 'シングルクォーテーションマークは使用できません: ',
    'ERR_NOTHING_SELECTED' => '実行する前に選択してください。',
    'ERR_OPPORTUNITY_NAME_DUPE' => ' %s の名前の商談は既に存在します。別の名前を使用してください。',
    'ERR_OPPORTUNITY_NAME_MISSING' => '商談名が入力されていません。商談名を入力してください。',
    'ERR_POTENTIAL_SEGFAULT' => '潜在的なApacheの例外が発見されました。この問題をシステム管理者に報告し、さらに、システム管理者からSugarCRM社へ報告してください。',
    'ERR_SELF_REPORTING' => '自分自身にレポートできません',
    'ERR_SINGLE_QUOTE'  => 'このフィールドではシングルクォーテーションマークは使用できません。値を変更してください。',
    'ERR_SQS_NO_MATCH_FIELD' => 'フィールドにマッチしません: ',
    'ERR_SQS_NO_MATCH' =>'マッチしません',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Meta-Data定義用のdisplayParam属性中の\'key\'インデックスを指定してください',
    'ERR_EXISTING_PORTAL_USERNAME'=>'エラー: ポータル名はすでに他の取引先担当者にアサインされています。',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'フィールドの値は、有効桁数値として適切ではありません。',

    'LBL_ACCOUNT'=>'取引先',
    'LBL_OLD_ACCOUNT_LINK'=>'以前の取引先',
    'LBL_ACCOUNTS'=>'取引先',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'活動',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'サマリ表示',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'サマリ表示 [Alt+H]',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => '追加 [Alt+A]',
    'LBL_ADD_BUTTON' => '追加',
    'LBL_ADD_DOCUMENT' => 'ドキュメント追加',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'ターゲットリストに追加',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'ターゲットリストに追加',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'クリックして閉じる',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => '完了',
    'LBL_ADDITIONAL_DETAILS' => '追加詳細',
    'LBL_ADMIN' => '管理',
    'LBL_ALT_HOT_KEY' => 'Alt+',
    'LBL_ARCHIVE' => '保存',
    'LBL_ASSIGNED_TO_USER'=>'アサイン先ユーザ',
    'LBL_ASSIGNED_TO' => 'アサイン先:',
    'LBL_BACK' => '戻る',
    'LBL_BILL_TO_ACCOUNT'=>'取引先に請求',
    'LBL_BILL_TO_CONTACT'=>'取引先担当者に請求',
    'LBL_BILLING_ADDRESS'=>'請求先住所',




    'LBL_BROWSER_TITLE' => 'SugarCRM - オープンソースCRM',

    'LBL_BUGS'=>'バグトラッカー',
    'LBL_BY' => 'by',
    'LBL_CALLS'=>'コール',
    'LBL_CALL'=>'コール',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'キューに従ってキャンペーンメールを送信',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'キャンセル',
    'LBL_CANCEL_BUTTON_TITLE' => 'キャンセル [Alt+X]',
    'LBL_SUBMIT_BUTTON_LABEL' => '作成',
    'LBL_CASE'=>'ケース',
    'LBL_CASES'=>'ケース',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_BUTTON_LABEL' => '変更',
    'LBL_CHANGE_BUTTON_TITLE' => '変更 [Alt+G]',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'すべてチェック',
    'LBL_CITY' => '市区町村',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'クリア',
    'LBL_CLEAR_BUTTON_TITLE' => 'クリア [Alt+C]',
    'LBL_CLEARALL' => 'すべてクリア',
    'LBL_CLOSE_BUTTON_TITLE' =>'閉じる',
    'LBL_CLOSE_BUTTON_KEY'=>'Q',
    'LBL_CLOSE_WINDOW'=>'ウィンドウを閉じる',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'すべて閉じる',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'すべて閉じる [Alt+I]',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'これを完了状態にして複製を新規作成',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'これを完了状態にして複製を新規作成',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => '電子メール作成',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => '電子メール作成 [Alt+E]',
    'LBL_SEARCH_DROPDOWN_YES'=>'Yes',
    'LBL_SEARCH_DROPDOWN_NO'=>'No',
    'LBL_CONTACT_LIST' => '取引先担当者一覧',
    'LBL_CONTACT'=>'取引先担当者',
    'LBL_CONTACTS'=>'取引先担当者',
    'LBL_CONTRACTS'=>'契約',
    'LBL_COUNTRY' => '国:',
    'LBL_CREATE_BUTTON_LABEL' => '作成',
    'LBL_CREATED_BY_USER' => '作成ユーザ',
    'LBL_CREATED_USER'=>'生成ユーザ',
    'LBL_CREATED_ID' => '生成ID',
    'LBL_CREATED' => '作成者',
    'LBL_CURRENT_USER_FILTER' => '自分のアイテムのみ:',
    'LBL_CURRENCY'=>'通貨:',
    'LBL_DOCUMENTS'=>'ドキュメント',
    'LBL_DATE_ENTERED' => '入力日:',
    'LBL_DATE_MODIFIED' => '最終更新日:',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => '削除',
    'LBL_DELETE_BUTTON_TITLE' => '削除 [Alt+D]',
    'LBL_DELETE_BUTTON' => '削除',
    'LBL_DELETE' => '削除',
    'LBL_DELETED'=>'削除済み',
    'LBL_DIRECT_REPORTS'=>'直属の部下',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => '完了',
    'LBL_DONE_BUTTON_TITLE' => '完了 [Alt+X]',
    'LBL_DST_NEEDS_FIXIN' => 'アプリケーションはサマータイム設定を必要としています。 管理画面の<a href="index.php?module=Administration&action=DstFix">リペア</a>を選択し、サマータイム設定を行ってください。',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => '複製',
    'LBL_DUPLICATE_BUTTON_TITLE' => '複製 [Alt+U]',
    'LBL_DUPLICATE_BUTTON' => '複製',
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => '編集',
    'LBL_EDIT_BUTTON_TITLE' => '編集 [Alt+E]',
    'LBL_EDIT_BUTTON' => '編集',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => '新規として編集',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => '新規として編集',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => '閲覧',
    'LBL_VIEW_BUTTON_TITLE' => '閲覧[Alt+V]',
    'LBL_VIEW_BUTTON' => '閲覧',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'PDFをメール送信',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'PDFをメール送信 [Alt+M]',
    'LBL_EMAILS'=>'電子メール',
    'LBL_EMPLOYEES' => '従業員',
    'LBL_ENTER_DATE' => '入力日',
    'LBL_EXPORT_ALL' => 'すべてエクスポート',
    'LBL_EXPORT' => 'エクスポート',
    'LBL_GO_BUTTON_LABEL' => '実行',
    'LBL_HIDE'=>'非表示',
    'LBL_ID'=>'ID',
    'LBL_IMPORT_PROSPECTS'=>'ターゲットのインポート',
    'LBL_IMPORT' => 'インポート',
    'LBL_IMPORT_STARTED' => 'インポートがスタートしました。',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'カスタム区切り文字を指定して下さい。',
    'LBL_LAST_VIEWED' => '参照履歴',
    'LBL_TODAYS_ACTIVITIES' => '本日の活動',
    'LBL_LEADS'=>'リード',
    'LBL_LESS' => '以下',
    'LBL_CAMPAIGN' => 'キャンペーン:',
    'LBL_CAMPAIGNS' => 'キャンペーン',
    'LBL_CAMPAIGNLOG' => 'キャンペーンログ',
    'LBL_CAMPAIGN_CONTACT'=>'キャンペーン',
    'LBL_CAMPAIGN_ID'=>'キャンペーンID',
    'LBL_SITEMAP'=>'サイトマップ',
    'LBL_FOUND_IN_RELEASE'=>'発見したリリース',
    'LBL_FIXED_IN_RELEASE'=>'修正したリリース',
    'LBL_LIST_ACCOUNT_NAME' => '取引先',
    'LBL_LIST_ASSIGNED_USER' => 'アサイン先',
    'LBL_LIST_CONTACT_NAME' => '取引先担当者',
    'LBL_LIST_CONTACT_ROLE' => '取引先担当者役割',
    'LBL_LIST_EMAIL' => '電子メール',
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_OF' => '件中',
    'LBL_LIST_PHONE' => '電話',
    'LBL_LIST_RELATED_TO' => '関連先',
    'LBL_LIST_USER_NAME' => 'ユーザ名',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'すべてのリストを更新しても良いですか?',
    'LBL_LISTVIEW_NO_SELECTED' => '少なくとも一つのレコードを選択してください。',
    'LBL_LISTVIEW_TWO_REQUIRED' => '最低2つのレコードを選択して下さい。',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => '続行するには10件以下を選択してください。',
    'LBL_LISTVIEW_ALL' => 'すべての',
    'LBL_LISTVIEW_NONE' => 'なし',
    'LBL_LISTVIEW_OPTION_CURRENT' => 'このページ',
    'LBL_LISTVIEW_OPTION_ENTIRE' => 'すべてのレコード',
    'LBL_LISTVIEW_OPTION_SELECTED' => '選択されたレコード',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => '選択済み: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => '名',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => '姓',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => '様',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_LOGIN_TO_ACCESS' => 'このエリアにアクセスするにはサインインしてください。',
    'LBL_LOGOUT' => 'ログアウト',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'メールマージ',
    'LBL_MASS_UPDATE' => '一括更新',
    'LBL_OPT_OUT_FLAG_PRIMARY' => '受信拒否メールアドレス',
    'LBL_MEETINGS'=>'ミーティング',
    'LBL_MEETING'=>'ミーティング',
    'LBL_MEMBERS'=>'メンバー一覧',
    'LBL_MEMBER_OF'=>'次のメンバー',
    'LBL_MODIFIED_BY_USER' => '編集ユーザ',
    'LBL_MODIFIED_USER'=>'更新ユーザ',
    'LBL_MODIFIED' => '更新者',
    'LBL_MODIFIED_NAME'=>'更新者',
    'LBL_MODIFIED_ID'=>'更新ID',
    'LBL_MORE' => '以上',
    'LBL_MY_ACCOUNT' => 'ユーザ設定',
    'LBL_NAME' => '名前',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => '作成',
    'LBL_NEW_BUTTON_TITLE' => '新規 [Alt+N]',
    'LBL_NEXT_BUTTON_LABEL' => '次へ',
    'LBL_NONE' => '--なし--',
    'LBL_NOTES'=>'ノート',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'すべて開く',
    'LBL_OPENALL_BUTTON_TITLE' => 'すべて開く [Alt+O]',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => '開く先: ',
    'LBL_OPENTO_BUTTON_TITLE' => '開く先: [Alt+T]',
    'LBL_OPPORTUNITIES'=>'商談',
    'LBL_OPPORTUNITY_NAME' => '商談名',
    'LBL_OPPORTUNITY'=>'商談',
    'LBL_OR' => 'または',
    'LBL_LOWER_OR' => 'または',
    'LBL_PARENT_TYPE' => '親タイプ',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'フェーズ',
    'LBL_POSTAL_CODE' => '郵便番号:',
    'LBL_PRIMARY_ADDRESS_CITY' => '主となる市区町村:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '主となる国:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '主となる郵便番号:',
    'LBL_PRIMARY_ADDRESS_STATE' => '主となる都道府県:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '主となる住所 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '主となる住所 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => '主となる番地:',
    'LBL_PRIMARY_ADDRESS' => '主となる住所:',
    'LBL_PRODUCT_BUNDLES'=>'商品バンドル',
    'LBL_PRODUCT_BUNDLES'=>'商品バンドル',
    'LBL_PRODUCTS'=>'商品',
    'LBL_PROJECT_TASKS'=>'プロジェクトタスク',
    'LBL_PROJECTS'=>'プロジェクト',
    'LBL_PROJECTS'=>'プロジェクト',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => '見積から商談を作成',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => '見積から商談を作成 [Alt+O]',
    'LBL_QUOTES_SHIP_TO'=>'見積の出荷先',
    'LBL_QUOTES'=>'見積',
    'LBL_QUOTES_OBSOLETE'=>'見積(廃棄済)',
    'LBL_RELATED' => '関連',
    'LBL_RELATED_INFORMATION' => '関連情報',
    'LBL_RELATED_RECORDS' => '関連レコード',
    'LBL_REMOVE' => '削除',
    'LBL_REPORTS_TO' => 'レポート先',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => '保存',
    'LBL_SAVE_BUTTON_TITLE' => '保存 [Alt+S]',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => '別名で保存',
    'LBL_SAVE_AS_BUTTON_TITLE' => '別名で保存[Alt+A]',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'フルフォーム',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'フルフォーム[Alt+F]',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => '保存後新規作成',
    'LBL_SAVE_NEW_BUTTON_TITLE' => '保存後新規作成 [Alt+V]',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => '検索',
    'LBL_SEARCH_BUTTON_TITLE' => '検索 [Alt+Q]',
    'LBL_SEARCH' => '検索',
    'LBL_SEE_ALL' => 'すべてを見る',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => '選択',
    'LBL_SELECT_BUTTON_TITLE' => '選択 [Alt+T]',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => '参照',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => '参照 [Alt+B]',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => '取引先担当者選択',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => '取引先担当者選択 [Alt+T]',
    'LBL_GRID_SELECTED_FILE' => '選択されたファイル',
    'LBL_GRID_SELECTED_FILES' => '選択されたファイル',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'レポートから選択',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'レポート選択',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'ユーザ選択',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'ユーザ選択 [Alt+U]',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'このページを構成するリソース (クエリ、ファイル)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => '秒',
    'LBL_SERVER_RESPONSE_TIME' => 'サーバ応答時間:',
    'LBL_SHIP_TO_ACCOUNT'=>'取引先に出荷',
    'LBL_SHIP_TO_CONTACT'=>'取引先担当者に出荷',
    'LBL_SHIPPING_ADDRESS'=>'出荷先住所',
    'LBL_SHORTCUTS' => 'ショートカット',
    'LBL_SHOW'=>'表示',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => '都道府県:',
    'LBL_STATUS_UPDATED'=>'当イベントのステータスが更新されました!',
    'LBL_STATUS'=>'ステータス:',
    'LBL_SUBJECT' => '件名',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */
    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2009 SugarCRM Inc. The Program is provided AS IS, without warranty.  Licensed under <a href="LICENSE.txt" target="_blank" class="copyRightLink">GPLv3</a>.',



    'LBL_SYNC' => '同期',
    'LBL_SYNC' => '同期',
    'LBL_TABGROUP_ALL' => 'すべて',
    'LBL_TABGROUP_ACTIVITIES' => '活動',
    'LBL_TABGROUP_COLLABORATION' => '共同作業',
    'LBL_TABGROUP_HOME' => 'ホーム',
    'LBL_TABGROUP_MARKETING' => 'マーケティング',
    'LBL_TABGROUP_MY_PORTALS' => 'マイポータル',
    'LBL_TABGROUP_OTHER' => 'その他',
    'LBL_TABGROUP_REPORTS' => 'レポート',
    'LBL_TABGROUP_SALES' => '営業',
    'LBL_TABGROUP_SUPPORT' => 'サポート',
    'LBL_TABGROUP_TOOLS' => 'ツール',



    'LBL_TASKS'=>'タスク',
    'LBL_TEAMS_LINK'=>'チーム',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => '電子メール作成・保存',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => '電子メール作成・保存 [Alt+K]',
    'LBL_UNAUTH_ADMIN' => '管理者機能へアクセスする権限がありません',
    'LBL_UNDELETE_BUTTON_LABEL' => '削除取消',
    'LBL_UNDELETE_BUTTON_TITLE' => '削除取消 [Alt+D]',
    'LBL_UNDELETE_BUTTON' => '削除取消',
    'LBL_UNDELETE' => '削除取消',
    'LBL_UNSYNC' => '同期取消',
    'LBL_UPDATE' => '更新',
    'LBL_USER_LIST' => 'ユーザ一覧',
    'LBL_USERS_SYNC'=>'ユーザの同期',
    'LBL_USERS'=>'ユーザ',
    'LBL_VERIFY_EMAIL_ADDRESS'=>'既存の電子メールをチェックする...',
    'LBL_VERIFY_PORTAL_NAME'=>'既存のポータル名をチェックする...',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'PDFを印刷',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'PDFを印刷 [Alt+P]',

    'LNK_ABOUT' => '製品について',
    'LNK_ADVANCED_SEARCH' => '詳細検索',
    'LNK_BASIC_SEARCH' => '基本検索',
    'LNK_SAVED_VIEWS' => '保存済みビュー',
    'LNK_DELETE_ALL' => 'すべて削除',
    'LNK_DELETE' => '削除',
    'LNK_EDIT' => '編集',
    'LNK_GET_LATEST'=>'最新を取得',
    'LNK_GET_LATEST_TOOLTIP'=>'最新と入れ替え',
    'LNK_HELP' => 'ヘルプ',
    'LNK_LIST_END' => '最後',
    'LNK_LIST_NEXT' => '次へ',
    'LNK_LIST_PREVIOUS' => '前へ',
    'LNK_LIST_RETURN' => '一覧へ戻る',
    'LNK_LIST_START' => '最初',
    'LNK_LOAD_SIGNED'=>'サイン',
    'LNK_LOAD_SIGNED_TOOLTIP'=>'サイン済みと入れ替え',
    'LNK_PRINT' => '印刷',
    'LNK_REMOVE' => 'はずす',
    'LNK_RESUME' => '戻す',
    'LNK_VIEW_CHANGE_LOG' => '変更履歴表示',


    'NTC_CLICK_BACK' => 'エラーを修正するにはブラウザの戻るボタンをクリックしてください',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => '本当にこのレコードを削除してよいですか?',
    'NTC_TEMPLATE_IS_USED' => 'このテンプレートは、少なくとも一つのEメールマーケティングで利用されています。削除しますか？',
    'NTC_TEMPLATES_IS_USED' => "これらテンプレートは、Eメールマーケティングで利用されています。削除しますか？\n",
    'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除してよいですか?',
    'NTC_DELETE_CONFIRMATION_NUM' => '次を削除してもよいですか: ',
    'NTC_UPDATE_CONFIRMATION_NUM' => '次を更新してもよいですか? ',
    'NTC_DELETE_SELECTED_RECORDS' =>'レコード選択',
    'NTC_LOGIN_MESSAGE' => 'ユーザ名とパスワードを入力してください:',
    'NTC_NO_ITEMS_DISPLAY' => 'なし',
    'NTC_REMOVE_CONFIRMATION' => '本当にこのリレーションを削除してよいですか?',
    'NTC_REQUIRED' => '必須項目',
    'NTC_SUPPORT_SUGARCRM' => 'SugarCRMのオープンソースプロジェクトをPayPalを通じサポートしてください。-　速くて、無料で安心です！',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'ようこそ',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'LOGIN_LOGO_ERROR'=> 'SugarCRMロゴを入れ替えてください。',
    'ERROR_FULLY_EXPIRED'=> "SugarCRMのライセンス期限が切れてから30日以上を経過しています。ライセンスを更新してください。管理者のみがログインできます。",
    'ERROR_LICENSE_EXPIRED'=> "SugarCRMのライセンスを更新する必要があります。管理者のみがログインできます。",
    'ERROR_LICENSE_VALIDATION'=> "SugarCRMライセンスを検証する必要があります。管理者だけがログインできます。",
    'WARN_LICENSE_SEATS'=>  "警告:アクティブユーザがライセンスの上限を超えています。",
	'WARN_LICENSE_SEATS_MAXED'=>  "警告: アクティブユーザがライセンスの上限に達しました。",
    'WARN_ONLY_ADMINS'=> "管理者だけがログインできます。",
    'ERROR_NO_RECORD' => 'レコードの検索中にエラー。このレコードは削除されているか、閲覧する権限がありません。',
    'ERROR_TYPE_NOT_VALID' => 'エラー: このタイプは有効ではありません。',
    'LBL_DUP_MERGE'=>'重複を検出',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'サブスクリプションの管理',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'サブスクリプションの管理対象: ',
    'LBL_SUBSCRIBE'=>'購読',
    'LBL_UNSUBSCRIBE'=>'解約',
    // Ajax status strings
    'LBL_LOADING' => 'ロード中....',
    'LBL_SEARCHING' => '検索中...',
    'LBL_SAVING_LAYOUT' => 'レイアウトを保存中....',
    'LBL_SAVED_LAYOUT' => 'レイアウトは保存されました。',
    'LBL_SAVED' => '保存済み',
    'LBL_SAVING' => '保存中',
    'LBL_FAILED' => '失敗しました!',
    'LBL_DISPLAY_COLUMNS' => '列を表示',
    'LBL_HIDE_COLUMNS' => '列を非表示',
    'LBL_SEARCH_CRITERIA' => '検索条件',
    'LBL_SAVED_VIEWS' => '保存済みビュー',
    'LBL_PROCESSING_REQUEST'=>'処理中...',
    'LBL_REQUEST_PROCESSED'=>'完了',





    'LBL_MERGE_DUPLICATES'  => '重複をマージ',
    'LBL_SAVED_SEARCH_SHORTCUT' => '保存済み検索',
    'LBL_SEARCH_POPULATE_ONLY'=> '上記の検索フォームを用いて検索を実行',
    'LBL_DETAILVIEW'=>'詳細ビュー',
    'LBL_LISTVIEW'=>'リストビュー',
    'LBL_EDITVIEW'=>'編集ビュー',
    'LBL_SEARCHFORM'=>'検索フォーム',
    'LBL_SAVED_SEARCH_ERROR' => 'このビューに名前を付けてください。',
    'LBL_DISPLAY_LOG' => 'ログを表示',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'システム管理',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'セッションタイムアウト',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'セッションがおよそ2分でタイムアウトします。作業内容を保存してください。',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'セッションがタイムアウトしました',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nアジェンダ: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'ミーティング',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'コール',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => '時間: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => '場所: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => '詳細: ',
    'MSG_JS_ALERT_MTG_REMINDER_MSG' => "\nOKをクリックしてこのミーティングを参照するか、キャンセルをクリックしてください。",
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => '私のお気に入りに追加',
    'LBL_MARK_AS_FAVORITES' => 'お気に入りとしてマーク',
    'LBL_CREATE_CONTACT' => '取引先担当者作成',
    'LBL_CREATE_CASE' => 'ケース作成',
    'LBL_CREATE_NOTE' => 'ノート作成',
    'LBL_CREATE_OPPORTUNITY' => '商談作成',
    'LBL_SCHEDULE_CALL' => 'コール作成',
    'LBL_SCHEDULE_MEETING' => 'ミーティング作成',
    'LBL_CREATE_TASK' => 'タスク作成',
    'LBL_REMOVE_FROM_FAVORITES' => '私のお気に入りから削除',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'フォームの生成',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Web To Leadフォームの保存',

    'LBL_PLEASE_SELECT' => '選択してください',
    'LBL_REDIRECT_URL'=>'リダイレクトURL',
    'LBL_RELATED_CAMPAIGN' =>'関連キャンペーン',
    'LBL_ADD_ALL_LEAD_FIELDS' => '全フィールドの追加',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => '全フィールドの削除',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'イメージタイプの添付ファイルのみ埋め込めます。',
    'LBL_REMOVE' => '削除',
    'LBL_TRAINING' => 'トレーニング',
    'ERR_DATABASE_CONN_DROPPED'=>'クエリの実行がエラーになりました。データベースへの接続が切れた可能性があります。このページを再読込みしてください。Webサーバの再起動が必要な場合もあります。',
    'ERR_MSSQL_DB_CONTEXT' =>'データベースコンテキストが変更されました',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => '警告: フィールド[[field]]がvardefs.phpファイルの[moduleDir]でマップされたエントリを持っていません。',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'エラー: ファイル[[file]]がありません。対応するHTMLファイルが蜜からないため作成できません。',
	'ERR_CANNOT_FIND_MODULE' => 'エラー: モジュール[[module]]は存在しません。',
	'LBL_ALT_ADDRESS' => '別の住所:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'エラー: displayParam配列中の\'key\'と\'copy\'に対して引数の数が異なっています。',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'displayParams配列のインデックスが見つかりません:',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => '一般',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'フィルタ',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '私のアイテムのみ',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'タイトル',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '行の表示',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => '新しいページを作成しています...',
    'LBL_NEW_PAGE_FEEDBACK' => '新しいページを作成しました。ダッシュレット追加メニューオプションで新しい内容を追加できます。',
    'LBL_DELETE_PAGE_CONFIRM' => 'このページを本当に削除しますか?',
    'LBL_SAVING_PAGE_TITLE' => 'ページタイトルを保存しています...',
    'LBL_RETRIEVING_PAGE' => 'ページを取得しています...',
    'LBL_MAX_DASHLETS_REACHED' => '管理者が設定したダッシュレットの最大作成数に達しました。不要なダッシュレットを削除してから新規に作成してください。',
    'LBL_ADDING_DASHLET' => 'ダッシュレットの追加中....',
    'LBL_ADDED_DASHLET' => 'ダッシュレットが追加されました。',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'ダッシュレットを削除しても良いですか？',
    'LBL_REMOVING_DASHLET' => 'ダッシュレットの削除中....',
    'LBL_REMOVED_DASHLET' => 'ダッシュレットが削除されました。',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'ページを追加',
    'LBL_DELETE_PAGE' => 'ページを削除',
    'LBL_CHANGE_LAYOUT' => 'レイアウトを変更',
    'LBL_RENAME_PAGE' => 'ページをリネーム',

    'LBL_LOADING_PAGE' => 'ページをロード中、お待ちください...',

    'LBL_RELOAD_PAGE' => 'このダッシュレットを使用するにはウィンドウを<a href="javascript: window.location.reload()">再ロード</a>してください。',
    'LBL_ADD_DASHLETS' => 'ダッシュレットの追加',
    'LBL_CLOSE_DASHLETS' => '完了',
    'LBL_OPTIONS' => 'オプション',
    'LBL_NUMBER_OF_COLUMNS' => 'アイコンをクリックしてカラム数を選択してください。',
    'LBL_1_COLUMN' => '1列',
    'LBL_2_COLUMN' => '2列',
    'LBL_3_COLUMN' => '3列',
    'LBL_PAGE_NAME' => 'ページ名',

    'LBL_SEARCH_RESULTS' => '検索結果',
    'LBL_SEARCH_MODULES' => 'モジュール',
    'LBL_SEARCH_CHARTS' => 'チャート一覧',
    'LBL_SEARCH_REPORT_CHARTS' => 'レポートチャート',
    'LBL_SEARCH_TOOLS' => 'ツール',
    'LBL_SEARCH_HELP_TITLE' => 'マルチセレクトコントロールの検索方法と保存済み検索の利用方法',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => '閉じる',

    'ERR_BLANK_PAGE_NAME' => 'ページ名を入力してください。',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'イメージなし',

    'LBL_MODULE' => 'モジュール',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => '左からアドレスをコピー:',
    'LBL_SAVE_AND_CONTINUE' => '保存して継続',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>マルチセレクトコントロール</strong></p><ul><li>値をクリックして属性を表示してください。</li><li>Ctrl-クリック で複数を選択できます。MacユーザはCMD-クリックを使用します。</li><li>2つの属性間のすべてを選択する場合、最初の属性をクリックし次に最後の属性をshift-クリックします。</li></ul><p><strong>詳細検索とレイアウトオプション</strong><br><br><b>保存済み検索とレイアウト</b>オプションを使うと、検索パラメタと一覧ビューのカスタムレイアウトを保存することができ、次回以降、同じ検索をすばやく行うことができます。保存済み検索とレイアウトの数に制限はありません。保存された検索の名前は保存済み検索エリアに表示されます。最後に保存されたものがトップに表示されます。<br><br>一覧ビューのレイアウトをカスタマイズするには、カラムの非表示と表示ボックスを用い、表示したいカラムを選択します。例えば、レコード名、アサイン先、アサイン先チームといった詳細情報を非表示にしたり、表示したりできます。一覧ビューにカラムを追加するには、非表示カラムからカラムを選択し、左向きの矢印を押下して表示カラムのボックスに移動します。一覧ビューからカラムを非表示にするには、表示カラムからカラムを選択し、右向き矢印を使って非表示カラムのボックスに移動します。<br><br>レイアウトの設定を保存したら、いつでもカスタムのレイアウトで検索結果を見ることができます。<br><br><strong>検索とレイアウトの更新</strong><ol><li><b>検索結果に名前を付けて保存</b>フィールドに名前を入力し、<b>保存</b>をクリックすることで検索結果を保存します。入力した名前は<b>クリア</b>ボタンのすぐそばの保存済み検索に表示されます。</li><li>保存済み検索を見る場合、保存済み検索一覧から当該検索を選択してください。検索結果が一覧ビューとして表示されます。</li><li>保存済み検索の属性を更新する場合、保存済み検索を一覧から選択し、新たな検索条件かレイアウトを指定して、<b>更新</b>を押下してください。</li><li>保存済み検索を削除する場合、保存済み検索から当該検索を選択し、<b>削除< /b>を押下してください。その後、確認画面で<b>OK</b>を押下してください。</li></ol>',

    //resource management
    'ERR_QUERY_LIMIT' => 'エラー: $module モジュールの検索リミット $limit に達しました。',
    'ERROR_NOTIFY_OVERRIDE' => 'エラー: ResourceObserver->notify() をオーバーライドする必要があります。',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'エラー: メタファイルが空もしくは存在しないため、モニターを作成できません。',
    'ERR_MONITOR_NOT_CONFIGURED' => 'エラー: 要求された名前の設定されたモニターが存在しません。',
    'ERR_UNDEFINED_METRIC' => 'エラー: 未定義のマトリックスに値は設定できません。',
    'ERR_STORE_FILE_MISSING' => 'エラー: 保存された実装ファイルが見つかりません。',

    'LBL_MONITOR_ID' => 'モニターID',




    'LBL_USER_ID' => 'ユーザID',
    'LBL_MODULE_NAME' => 'モジュール名',
    'LBL_ITEM_ID' => 'アイテムID',
    'LBL_ITEM_SUMMARY' => 'アイテム概要',
    'LBL_ACTION' => 'アクション',
    'LBL_SESSION_ID' => 'セッションID',
    'LBL_VISIBLE' => 'レコードの可視性',
    'LBL_DATE_LAST_ACTION' => '最後のアクションの日付',




























    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'は、次よりも前ではない ',

    'LBL_PORTAL_WELCOME_TITLE' => 'Sugar Portal 5.1.0へようこそ',
    'LBL_PORTAL_WELCOME_INFO' => 'Sugar Portalはケース、バグ、ニュースレターを素早くお客様に提供するフレームワークです。 どのようなWebサイトにも配置可能なSugarの外部インターフェースです。将来のバージョンでプロジェクトマネージメントやフォーラムなどのセルフサービス機能が提供され次第、お伝えします。',
    'LBL_LIST' => '一覧',
    'LBL_CREATE_CASE' => 'ケース作成',
    'LBL_CREATE_BUG' => '不具合作成',
    'LBL_NO_RECORDS_FOUND' => '- レコードが見つかりません -',

    'DATA_TYPE_DUE' => '期限日:',
  	'DATA_TYPE_START' => '開始日',
  	'DATA_TYPE_SENT' => '送信日',
  	'DATA_TYPE_MODIFIED' => '更新日',


    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => '合計',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'object image',//未使用
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => '日付選択',

	//OSC 
	// include/javascript/sugar_3.jsで利用されているが、結合する際に
	//　'value'という文字列がハードコードされているためこのまま
    'LBL_VALIDATE_RANGE' => 'is not within the valid range',

    //jchi #	20776
    'LBL_DROPDOWN_LIST_ALL' => 'All',

    'LBL_OPERATOR_IN_TEXT' => 'を含む:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'を含まない:',


	//Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'エラー: Beanパラメータの配列の要素数と結果の配列の要素数が一致しません。',
	'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'エラー: モジュールの関連エントリがありません。',
	'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'エラー: {0} コネクタのデータを取得できません。サービスが現在利用不可の状態であるか、設定に誤りがあります。コネクタエラーメッセージ：({1})',
	'LBL_MERGE_CONNECTORS' => 'データの取得',
	'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
	'LBL_REMOVE_MODULE_ENTRY' => 'このモジュールへのコネクタの統合を無効化していいですか?',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM'=> 'Globalチームは削除できません。中断します。',
    'LBL_MASSUPDATE_DELETE_PRIVATE_TEAMS'=>'プライベートチームは削除できません。中断します。',
    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'Flashが無効化されているか古いバージョンのAdobe\'s Flash Playerを利用しています。<a href="http://www.adobe.com/go/getflashplayer/">最新のFlashプレーヤー</a>を取得するかFlashを有効化してください。',

);

$app_list_strings['moduleList']['Library'] = 'ライブラリ';
$app_list_strings['library_type'] = array('Books'=>'書籍', 'Music'=>'音楽', 'DVD'=>'DVD', 'Magazines'=>'雑誌');
$app_list_strings['moduleList']['EmailAddresses'] = 'メールアドレス';
/* OSC
$app_list_strings['kbdocument_status_dom'] = 'Draft';
$app_list_strings['kbdocument_status_dom'] = array (
    'Draft' => 'Draft',
    'In Review' => 'In Review',
    'Published' => 'Published',
);
*/

$app_list_strings['project_priority_default'] = 'Medium';
$app_list_strings['project_priority_options'] = array (
    'High' => '高',
    'Medium' => '中',
    'Low' => '低',
);


$app_list_strings['kbdocument_status_default'] = 'Draft';
  $app_list_strings['kbdocument_status_dom'] =
    array (
    'Draft' => 'ドラフト',
    'Expired' => '期限切れ',
    'In Review' => 'レビュー中',
    'Published' => '公開済み',
  );

   $app_list_strings['kbadmin_actions_dom'] =
    array (
    ''          => '--管理者のアクション--',
    'Create New Tag' => 'タグを作成',
    'Delete Tag'=>'タグを削除',
    'Rename Tag'=>'タグの名前を変更',
    'Move Selected Articles'=>'選択された記事を移動',
    'Apply Tags On Articles'=>'記事にタグを適用',
    'Delete Selected Articles'=>'選択された記事を削除',
  );


  $app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        ''=>'',
        'some' => '添付ファイルあり',
        'none' => '添付ファイルなし',
        'mime' => 'MIMEタイプの指定',
        'name' => '名前の指定',
    );

  $app_list_strings['moduleList']['KBDocuments'] = 'ナレッジベース';
  $app_strings['LBL_CREATE_KB_DOCUMENT'] = '記事の作成' ;
  $app_list_strings['kbdocument_viewing_frequency_dom'] =
  array(
    ''=>'',
    'Top_5'  => 'トップ5',
    'Top_10' => 'トップ10',
    'Top_20' => 'トップ20',
    'Bot_5'  => 'ボトム5',
    'Bot_10' => 'ボトム10',
    'Bot_20' => 'ボトム20',
  );

   $app_list_strings['kbdocument_canned_search'] =
    array(
        'all'=>'すべて',
        'added' => '過去30日以内に追加',
        'pending' => '私の承認を保留',
        'updated' => '過去30日以内に更新',
        'faqs' => 'FAQs',
    );
    $app_list_strings['kbdocument_date_filter_options'] =
        array(
    '' => '',
    'on' => '以下の日',
    'before' => '以下の日以前',
    'after' => '以下の日以後',
    'between_dates' => '以下の期間',
    'last_7_days' => '過去7日間',
    'next_7_days' => '次の7日間',
    'last_month' => '先月',
    'this_month' => '今月',
    'next_month' => '翌月',
    'last_30_days' => '過去30日',
    'next_30_days' => '次の30日',
    'last_year' => '昨年',
    'this_year' => '今年',
    'next_year' => '翌年',
    'isnull' => 'はNull',
        );

    $app_list_strings['countries_dom'] = array(
        '' => '',
        'ABU DHABI' => 'ABU DHABI',
        'ADEN' => 'ADEN',
        'AFGHANISTAN' => 'AFGHANISTAN',
        'ALBANIA' => 'ALBANIA',
        'ALGERIA' => 'ALGERIA',
        'AMERICAN SAMOA' => 'AMERICAN SAMOA',
        'ANDORRA' => 'ANDORRA',
        'ANGOLA' => 'ANGOLA',
        'ANTARCTICA' => 'ANTARCTICA',
        'ANTIGUA' => 'ANTIGUA',
        'ARGENTINA' => 'ARGENTINA',
        'ARMENIA' => 'ARMENIA',
        'ARUBA' => 'ARUBA',
        'AUSTRALIA' => 'AUSTRALIA',
        'AUSTRIA' => 'AUSTRIA',
        'AZERBAIJAN' => 'AZERBAIJAN',
        'BAHAMAS' => 'BAHAMAS',
        'BAHRAIN' => 'BAHRAIN',
        'BANGLADESH' => 'BANGLADESH',
        'BARBADOS' => 'BARBADOS',
        'BELARUS' => 'BELARUS',
        'BELGIUM' => 'BELGIUM',
        'BELIZE' => 'BELIZE',
        'BENIN' => 'BENIN',
        'BERMUDA' => 'BERMUDA',
        'BHUTAN' => 'BHUTAN',
        'BOLIVIA' => 'BOLIVIA',
        'BOSNIA' => 'BOSNIA',
        'BOTSWANA' => 'BOTSWANA',
        'BOUVET ISLAND' => 'BOUVET ISLAND',
        'BRAZIL' => 'BRAZIL',
        'BRITISH ANTARCTICA TERRITORY' => 'BRITISH ANTARCTICA TERRITORY',
        'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
        'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
        'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
        'BRUNEI' => 'BRUNEI',
        'BULGARIA' => 'BULGARIA',
        'BURKINA FASO' => 'BURKINA FASO',
        'BURUNDI' => 'BURUNDI',
        'CAMBODIA' => 'CAMBODIA',
        'CAMEROON' => 'CAMEROON',
        'CANADA' => 'CANADA',
        'CANAL ZONE' => 'CANAL ZONE',
        'CANARY ISLAND' => 'CANARY ISLAND',
        'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
        'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',
        'CEVLON' => 'CEVLON',
        'CHAD' => 'CHAD',
        'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
        'CHILE' => 'CHILE',
        'CHINA' => 'CHINA',
        'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
        'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
        'COLOMBIA' => 'COLOMBIA',
        'COMORO ISLANDS' => 'COMORO ISLANDS',
        'CONGO' => 'CONGO',
        'CONGO KINSHASA' => 'CONGO KINSHASA',
        'COOK ISLANDS' => 'COOK ISLANDS',
        'COSTA RICA' => 'COSTA RICA',
        'CROATIA' => 'CROATIA',
        'CUBA' => 'CUBA',
        'CURACAO' => 'CURACAO',
        'CYPRUS' => 'CYPRUS',
        'CZECH REPUBLIC' => 'CZECH REPUBLIC',
        'DAHOMEY' => 'DAHOMEY',
        'DENMARK' => 'DENMARK',
        'DJIBOUTI' => 'DJIBOUTI',
        'DOMINICA' => 'DOMINICA',
        'DOMINICAN REPUBLIC' => 'DOMINICAN REPUBLIC',
        'DUBAI' => 'DUBAI',
        'ECUADOR' => 'ECUADOR',
        'EGYPT' => 'EGYPT',
        'EL SALVADOR' => 'EL SALVADOR',
        'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
        'ESTONIA' => 'ESTONIA',
        'ETHIOPIA' => 'ETHIOPIA',
        'FAEROE ISLANDS' => 'FAEROE ISLANDS',
        'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
        'FIJI' => 'FIJI',
        'FINLAND' => 'FINLAND',
        'FRANCE' => 'FRANCE',
        'FRENCH GUIANA' => 'FRENCH GUIANA',
        'FRENCH POLYNESIA' => 'FRENCH POLYNESIA',
        'GABON' => 'GABON',
        'GAMBIA' => 'GAMBIA',
        'GEORGIA' => 'GEORGIA',
        'GERMANY' => 'GERMANY',
        'GHANA' => 'GHANA',
        'GIBRALTAR' => 'GIBRALTAR',
        'GREECE' => 'GREECE',
        'GREENLAND' => 'GREENLAND',
        'GUADELOUPE' => 'GUADELOUPE',
        'GUAM' => 'GUAM',
        'GUATEMALA' => 'GUATEMALA',
        'GUINEA' => 'GUINEA',
        'GUYANA' => 'GUYANA',
        'HAITI' => 'HAITI',
        'HONDURAS' => 'HONDURAS',
        'HONG KONG' => 'HONG KONG',
        'HUNGARY' => 'HUNGARY',
        'ICELAND' => 'ICELAND',
        'IFNI' => 'IFNI',
        'INDIA' => 'INDIA',
        'INDONESIA' => 'INDONESIA',
        'IRAN' => 'IRAN',
        'IRAQ' => 'IRAQ',
        'IRELAND' => 'IRELAND',
        'ISRAEL' => 'ISRAEL',
        'ITALY' => 'ITALY',
        'IVORY COAST' => 'IVORY COAST',
        'JAMAICA' => 'JAMAICA',
        'JAPAN' => 'JAPAN',
        'JORDAN' => 'JORDAN',
        'KAZAKHSTAN' => 'KAZAKHSTAN',
        'KENYA' => 'KENYA',
        'KOREA' => 'KOREA',
        'KOREA, SOUTH' => 'KOREA, SOUTH',
        'KUWAIT' => 'KUWAIT',
        'KYRGYZSTAN' => 'KYRGYZSTAN',
        'LAOS' => 'LAOS',
        'LATVIA' => 'LATVIA',
        'LEBANON' => 'LEBANON',
        'LEEWARD ISLANDS' => 'LEEWARD ISLANDS',
        'LESOTHO' => 'LESOTHO',
        'LIBYA' => 'LIBYA',
        'LIECHTENSTEIN' => 'LIECHTENSTEIN',
        'LITHUANIA' => 'LITHUANIA',
        'LUXEMBOURG' => 'LUXEMBOURG',
        'MACAO' => 'MACAO',
        'MACEDONIA' => 'MACEDONIA',
        'MADAGASCAR' => 'MADAGASCAR',
        'MALAWI' => 'MALAWI',
        'MALAYSIA' => 'MALAYSIA',
        'MALDIVES' => 'MALDIVES',
        'MALI' => 'MALI',
        'MALTA' => 'MALTA',
        'MARTINIQUE' => 'MARTINIQUE',
        'MAURITANIA' => 'MAURITANIA',
        'MAURITIUS' => 'MAURITIUS',
        'MELANESIA' => 'MELANESIA',
        'MEXICO' => 'MEXICO',
        'MOLDOVIA' => 'MOLDOVIA',
        'MONACO' => 'MONACO',
        'MONGOLIA' => 'MONGOLIA',
        'MOROCCO' => 'MOROCCO',
        'MOZAMBIQUE' => 'MOZAMBIQUE',
        'MYANAMAR' => 'MYANAMAR',
        'NAMIBIA' => 'NAMIBIA',
        'NEPAL' => 'NEPAL',
        'NETHERLANDS' => 'NETHERLANDS',
        'NETHERLANDS ANTILLES' => 'NETHERLANDS ANTILLES',
        'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
        'NEW CALADONIA' => 'NEW CALADONIA',
        'NEW HEBRIDES' => 'NEW HEBRIDES',
        'NEW ZEALAND' => 'NEW ZEALAND',
        'NICARAGUA' => 'NICARAGUA',
        'NIGER' => 'NIGER',
        'NIGERIA' => 'NIGERIA',
        'NORFOLK ISLAND' => 'NORFOLK ISLAND',
        'NORWAY' => 'NORWAY',
        'OMAN' => 'OMAN',
        'OTHER' => 'OTHER',
        'PACIFIC ISLAND' => 'PACIFIC ISLAND',
        'PAKISTAN' => 'PAKISTAN',
        'PANAMA' => 'PANAMA',
        'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
        'PARAGUAY' => 'PARAGUAY',
        'PERU' => 'PERU',
        'PHILIPPINES' => 'PHILIPPINES',
        'POLAND' => 'POLAND',
        'PORTUGAL' => 'PORTUGAL',
        'PORTUGUESE TIMOR' => 'PORTUGUESE TIMOR',
        'PUERTO RICO' => 'PUERTO RICO',
        'QATAR' => 'QATAR',
        'REPUBLIC OF BELARUS' => 'REPUBLIC OF BELARUS',
        'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIC OF SOUTH AFRICA',
        'REUNION' => 'REUNION',
        'ROMANIA' => 'ROMANIA',
        'RUSSIA' => 'RUSSIA',
        'RWANDA' => 'RWANDA',
        'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
        'SABAH' => 'SABAH',
        'SAN MARINO' => 'SAN MARINO',
        'SAUDI ARABIA' => 'SAUDI ARABIA',
        'SENEGAL' => 'SENEGAL',
        'SERBIA' => 'SERBIA',
        'SEYCHELLES' => 'SEYCHELLES',
        'SIERRA LEONE' => 'SIERRA LEONE',
        'SINGAPORE' => 'SINGAPORE',
        'SLOVAKIA' => 'SLOVAKIA',
        'SLOVENIA' => 'SLOVENIA',
        'SOMALILIAND' => 'SOMALILIAND',
        'SOUTH AFRICA' => 'SOUTH AFRICA',
        'SOUTH YEMEN' => 'SOUTH YEMEN',
        'SPAIN' => 'SPAIN',
        'SPANISH SAHARA' => 'SPANISH SAHARA',
        'SRI LANKA' => 'SRI LANKA',
        'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
        'ST. LUCIA' => 'ST. LUCIA',
        'SUDAN' => 'SUDAN',
        'SURINAM' => 'SURINAM',
        'SW AFRICA' => 'SW AFRICA',
        'SWAZILAND' => 'SWAZILAND',
        'SWEDEN' => 'SWEDEN',
        'SWITZERLAND' => 'SWITZERLAND',
        'SYRIA' => 'SYRIA',
        'TAIWAN' => 'TAIWAN',
        'TAJIKISTAN' => 'TAJIKISTAN',
        'TANZANIA' => 'TANZANIA',
        'THAILAND' => 'THAILAND',
        'TONGA' => 'TONGA',
        'TRINIDAD' => 'TRINIDAD',
        'TUNISIA' => 'TUNISIA',
        'TURKEY' => 'TURKEY',
        'UGANDA' => 'UGANDA',
        'UKRAINE' => 'UKRAINE',
        'UNITED ARAB EMIRATES' => 'UNITED ARAB EMIRATES',
        'UNITED KINGDOM' => 'UNITED KINGDOM',
        'UPPER VOLTA' => 'UPPER VOLTA',
        'URUGUAY' => 'URUGUAY',
        'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
        'US VIRGIN ISLANDS' => 'US VIRGIN ISLANDS',
        'USA' => 'USA',
        'UZBEKISTAN' => 'UZBEKISTAN',
        'VANUATU' => 'VANUATU',
        'VATICAN CITY' => 'VATICAN CITY',
        'VENEZUELA' => 'VENEZUELA',
        'VIETNAM' => 'VIETNAM',
        'WAKE ISLAND' => 'WAKE ISLAND',
        'WEST INDIES' => 'WEST INDIES',
        'WESTERN SAHARA' => 'WESTERN SAHARA',
        'YEMEN' => 'YEMEN',
        'ZAIRE' => 'ZAIRE',
        'ZAMBIA' => 'ZAMBIA',
        'ZIMBABWE' => 'ZIMBABWE',
    );

  $app_list_strings['charset_dom'] = array(
    'BIG-5'     => 'BIG-5 (台湾と香港)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (マイクロソフト韓国語)', */
    'CP1251'    => 'CP1251 (MS キリル文字)',
    'CP1252'    => 'CP1252 (MS 西ヨーロッパとUS)',
    'EUC-CN'    => 'EUC-CN (簡体中国語 GB2312)',
    'EUC-JP'    => 'EUC-JP (Unix 日本語)',
    'EUC-KR'    => 'EUC-KR (韓国語)',
    'EUC-TW'    => 'EUC-TW (台湾語)',
    'ISO-2022-JP' => 'ISO-2022-JP (日本語)',
    'ISO-2022-KR' => 'ISO-2022-KR (韓国語)',
    'ISO-8859-1'  => 'ISO-8859-1 (西ヨーロッパとUS)',
    'ISO-8859-2'  => 'ISO-8859-2 (中欧および東欧)',
    'ISO-8859-3'  => 'ISO-8859-3 (ラテン語 3)',
    'ISO-8859-4'  => 'ISO-8859-4 (ラテン語 4)',
    'ISO-8859-5'  => 'ISO-8859-5 (キリル文字)',
    'ISO-8859-6'  => 'ISO-8859-6 (アラビア語)',
    'ISO-8859-7'  => 'ISO-8859-7 (ギリシャ語)',
    'ISO-8859-8'  => 'ISO-8859-8 (ヘブライ語)',
    'ISO-8859-9'  => 'ISO-8859-9 (ラテン語 5)',
    'ISO-8859-10' => 'ISO-8859-10 (ラテン語 6)',
    'ISO-8859-13' => 'ISO-8859-13 (ラテン語 7)',
    'ISO-8859-14' => 'ISO-8859-14 (ラテン語 8)',
    'ISO-8859-15' => 'ISO-8859-15 (ラテン語 9)',
    'KOI8-R'    => 'KOI8-R (キリル文字 ロシア語)',
    'KOI8-U'    => 'KOI8-U (キリル文字 ウクライナ語)',
    'SJIS'      => 'CP932 (MS 日本語)',
    'UTF-8'     => 'UTF-8',
  );

  $app_list_strings['timezone_dom'] = array(

      'Africa/Algiers' => 'Africa/Algiers',
  'Africa/Luanda' => 'Africa/Luanda',
  'Africa/Porto-Novo' => 'Africa/Porto-Novo',
  'Africa/Gaborone' => 'Africa/Gaborone',
  'Africa/Ouagadougou' => 'Africa/Ouagadougou',
  'Africa/Bujumbura' => 'Africa/Bujumbura',
  'Africa/Douala' => 'Africa/Douala',
  'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde',
  'Africa/Bangui' => 'Africa/Bangui',
  'Africa/Ndjamena' => 'Africa/Ndjamena',
  'Indian/Comoro' => 'Indian/Comoro',
  'Africa/Kinshasa' => 'Africa/Kinshasa',
  'Africa/Lubumbashi' => 'Africa/Lubumbashi',
  'Africa/Brazzaville' => 'Africa/Brazzaville',
  'Africa/Abidjan' => 'Africa/Abidjan',
  'Africa/Djibouti' => 'Africa/Djibouti',
  'Africa/Cairo' => 'Africa/Cairo',
  'Africa/Malabo' => 'Africa/Malabo',
  'Africa/Asmera' => 'Africa/Asmera',
  'Africa/Addis_Ababa' => 'Africa/Addis_Ababa',
  'Africa/Libreville' => 'Africa/Libreville',
  'Africa/Banjul' => 'Africa/Banjul',
  'Africa/Accra' => 'Africa/Accra',
  'Africa/Conakry' => 'Africa/Conakry',
  'Africa/Bissau' => 'Africa/Bissau',
  'Africa/Nairobi' => 'Africa/Nairobi',
  'Africa/Maseru' => 'Africa/Maseru',
  'Africa/Monrovia' => 'Africa/Monrovia',
  'Africa/Tripoli' => 'Africa/Tripoli',
  'Indian/Antananarivo' => 'Indian/Antananarivo',
  'Africa/Blantyre' => 'Africa/Blantyre',
  'Africa/Bamako' => 'Africa/Bamako',
  'Africa/Nouakchott' => 'Africa/Nouakchott',
  'Indian/Mauritius' => 'Indian/Mauritius',
  'Indian/Mayotte' => 'Indian/Mayotte',
  'Africa/Casablanca' => 'Africa/Casablanca',
  'Africa/El_Aaiun' => 'Africa/El_Aaiun',
  'Africa/Maputo' => 'Africa/Maputo',
  'Africa/Windhoek' => 'Africa/Windhoek',
  'Africa/Niamey' => 'Africa/Niamey',
  'Africa/Lagos' => 'Africa/Lagos',
  'Indian/Reunion' => 'Indian/Reunion',
  'Africa/Kigali' => 'Africa/Kigali',
  'Atlantic/St_Helena' => 'Atlantic/St_Helena',
  'Africa/Sao_Tome' => 'Africa/Sao_Tome',
  'Africa/Dakar' => 'Africa/Dakar',
  'Indian/Mahe' => 'Indian/Mahe',
  'Africa/Freetown' => 'Africa/Freetown',
  'Africa/Mogadishu' => 'Africa/Mogadishu',
  'Africa/Johannesburg' => 'Africa/Johannesburg',
  'Africa/Khartoum' => 'Africa/Khartoum',
  'Africa/Mbabane' => 'Africa/Mbabane',
  'Africa/Dar_es_Salaam' => 'Africa/Dar_es_Salaam',
  'Africa/Lome' => 'Africa/Lome',
  'Africa/Tunis' => 'Africa/Tunis',
  'Africa/Kampala' => 'Africa/Kampala',
  'Africa/Lusaka' => 'Africa/Lusaka',
  'Africa/Harare' => 'Africa/Harare',
  'Antarctica/Casey' => 'Antarctica/Casey',
  'Antarctica/Davis' => 'Antarctica/Davis',
  'Antarctica/Mawson' => 'Antarctica/Mawson',
  'Indian/Kerguelen' => 'Indian/Kerguelen',
  'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
  'Antarctica/Syowa' => 'Antarctica/Syowa',
  'Antarctica/Vostok' => 'Antarctica/Vostok',
  'Antarctica/Rothera' => 'Antarctica/Rothera',
  'Antarctica/Palmer' => 'Antarctica/Palmer',
  'Antarctica/McMurdo' => 'Antarctica/McMurdo',
  'Asia/Kabul' => 'Asia/Kabul',
  'Asia/Yerevan' => 'Asia/Yerevan',
  'Asia/Baku' => 'Asia/Baku',
  'Asia/Bahrain' => 'Asia/Bahrain',
  'Asia/Dhaka' => 'Asia/Dhaka',
  'Asia/Thimphu' => 'Asia/Thimphu',
  'Indian/Chagos' => 'Indian/Chagos',
  'Asia/Brunei' => 'Asia/Brunei',
  'Asia/Rangoon' => 'Asia/Rangoon',
  'Asia/Phnom_Penh' => 'Asia/Phnom_Penh',
  'Asia/Beijing' => 'Asia/Beijing',
  'Asia/Harbin' => 'Asia/Harbin',
  'Asia/Shanghai' => 'Asia/Shanghai',
  'Asia/Chongqing' => 'Asia/Chongqing',
  'Asia/Urumqi' => 'Asia/Urumqi',
  'Asia/Kashgar' => 'Asia/Kashgar',
  'Asia/Hong_Kong' => 'Asia/Hong_Kong',
  'Asia/Taipei' => 'Asia/Taipei',
  'Asia/Macau' => 'Asia/Macau',
  'Asia/Nicosia' => 'Asia/Nicosia',
  'Asia/Tbilisi' => 'Asia/Tbilisi',
  'Asia/Dili' => 'Asia/Dili',
  'Asia/Calcutta' => 'Asia/Calcutta',
  'Asia/Jakarta' => 'Asia/Jakarta',
  'Asia/Pontianak' => 'Asia/Pontianak',
  'Asia/Makassar' => 'Asia/Makassar',
  'Asia/Jayapura' => 'Asia/Jayapura',
  'Asia/Tehran' => 'Asia/Tehran',
  'Asia/Baghdad' => 'Asia/Baghdad',
  'Asia/Jerusalem' => 'Asia/Jerusalem',
  'Asia/Tokyo' => 'Asia/Tokyo',
  'Asia/Amman' => 'Asia/Amman',
  'Asia/Almaty' => 'Asia/Almaty',
  'Asia/Qyzylorda' => 'Asia/Qyzylorda',
  'Asia/Aqtobe' => 'Asia/Aqtobe',
  'Asia/Aqtau' => 'Asia/Aqtau',
  'Asia/Oral' => 'Asia/Oral',
  'Asia/Bishkek' => 'Asia/Bishkek',
  'Asia/Seoul' => 'Asia/Seoul',
  'Asia/Pyongyang' => 'Asia/Pyongyang',
  'Asia/Kuwait' => 'Asia/Kuwait',
  'Asia/Vientiane' => 'Asia/Vientiane',
  'Asia/Beirut' => 'Asia/Beirut',
  'Asia/Kuala_Lumpur' => 'Asia/Kuala_Lumpur',
  'Asia/Kuching' => 'Asia/Kuching',
  'Indian/Maldives' => 'Indian/Maldives',
  'Asia/Hovd' => 'Asia/Hovd',
  'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
  'Asia/Choibalsan' => 'Asia/Choibalsan',
  'Asia/Katmandu' => 'Asia/Katmandu',
  'Asia/Muscat' => 'Asia/Muscat',
  'Asia/Karachi' => 'Asia/Karachi',
  'Asia/Gaza' => 'Asia/Gaza',
  'Asia/Manila' => 'Asia/Manila',
  'Asia/Qatar' => 'Asia/Qatar',
  'Asia/Riyadh' => 'Asia/Riyadh',
  'Asia/Singapore' => 'Asia/Singapore',
  'Asia/Colombo' => 'Asia/Colombo',
  'Asia/Damascus' => 'Asia/Damascus',
  'Asia/Dushanbe' => 'Asia/Dushanbe',
  'Asia/Bangkok' => 'Asia/Bangkok',
  'Asia/Ashgabat' => 'Asia/Ashgabat',
  'Asia/Dubai' => 'Asia/Dubai',
  'Asia/Samarkand' => 'Asia/Samarkand',
  'Asia/Tashkent' => 'Asia/Tashkent',
  'Asia/Saigon' => 'Asia/Saigon',
  'Asia/Aden' => 'Asia/Aden',
  'Australia/Darwin' => 'Australia/Darwin',
  'Australia/Perth' => 'Australia/Perth',
  'Australia/Brisbane' => 'Australia/Brisbane',
  'Australia/Lindeman' => 'Australia/Lindeman',
  'Australia/Adelaide' => 'Australia/Adelaide',
  'Australia/Hobart' => 'Australia/Hobart',
  'Australia/Currie' => 'Australia/Currie',
  'Australia/Melbourne' => 'Australia/Melbourne',
  'Australia/Sydney' => 'Australia/Sydney',
  'Australia/Broken_Hill' => 'Australia/Broken_Hill',
  'Indian/Christmas' => 'Indian/Christmas',
  'Pacific/Rarotonga' => 'Pacific/Rarotonga',
  'Indian/Cocos' => 'Indian/Cocos',
  'Pacific/Fiji' => 'Pacific/Fiji',
  'Pacific/Gambier' => 'Pacific/Gambier',
  'Pacific/Marquesas' => 'Pacific/Marquesas',
  'Pacific/Tahiti' => 'Pacific/Tahiti',
  'Pacific/Guam' => 'Pacific/Guam',
  'Pacific/Tarawa' => 'Pacific/Tarawa',
  'Pacific/Enderbury' => 'Pacific/Enderbury',
  'Pacific/Kiritimati' => 'Pacific/Kiritimati',
  'Pacific/Saipan' => 'Pacific/Saipan',
  'Pacific/Majuro' => 'Pacific/Majuro',
  'Pacific/Kwajalein' => 'Pacific/Kwajalein',
  'Pacific/Truk' => 'Pacific/Truk',
  'Pacific/Ponape' => 'Pacific/Ponape',
  'Pacific/Kosrae' => 'Pacific/Kosrae',
  'Pacific/Nauru' => 'Pacific/Nauru',
  'Pacific/Noumea' => 'Pacific/Noumea',
  'Pacific/Auckland' => 'Pacific/Auckland',
  'Pacific/Chatham' => 'Pacific/Chatham',
  'Pacific/Niue' => 'Pacific/Niue',
  'Pacific/Norfolk' => 'Pacific/Norfolk',
  'Pacific/Palau' => 'Pacific/Palau',
  'Pacific/Port_Moresby' => 'Pacific/Port_Moresby',
  'Pacific/Pitcairn' => 'Pacific/Pitcairn',
  'Pacific/Pago_Pago' => 'Pacific/Pago_Pago',
  'Pacific/Apia' => 'Pacific/Apia',
  'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
  'Pacific/Fakaofo' => 'Pacific/Fakaofo',
  'Pacific/Tongatapu' => 'Pacific/Tongatapu',
  'Pacific/Funafuti' => 'Pacific/Funafuti',
  'Pacific/Johnston' => 'Pacific/Johnston',
  'Pacific/Midway' => 'Pacific/Midway',
  'Pacific/Wake' => 'Pacific/Wake',
  'Pacific/Efate' => 'Pacific/Efate',
  'Pacific/Wallis' => 'Pacific/Wallis',
  'Europe/London' => 'Europe/London',
  'Europe/Dublin' => 'Europe/Dublin',
  'WET' => 'WET',
  'CET' => 'CET',
  'MET' => 'MET',
  'EET' => 'EET',
  'Europe/Tirane' => 'Europe/Tirane',
  'Europe/Andorra' => 'Europe/Andorra',
  'Europe/Vienna' => 'Europe/Vienna',
  'Europe/Minsk' => 'Europe/Minsk',
  'Europe/Brussels' => 'Europe/Brussels',
  'Europe/Sofia' => 'Europe/Sofia',
  'Europe/Prague' => 'Europe/Prague',
  'Europe/Copenhagen' => 'Europe/Copenhagen',
  'Atlantic/Faeroe' => 'Atlantic/Faeroe',
  'America/Danmarkshavn' => 'America/Danmarkshavn',
  'America/Scoresbysund' => 'America/Scoresbysund',
  'America/Godthab' => 'America/Godthab',
  'America/Thule' => 'America/Thule',
  'Europe/Tallinn' => 'Europe/Tallinn',
  'Europe/Helsinki' => 'Europe/Helsinki',
  'Europe/Paris' => 'Europe/Paris',
  'Europe/Berlin' => 'Europe/Berlin',
  'Europe/Gibraltar' => 'Europe/Gibraltar',
  'Europe/Athens' => 'Europe/Athens',
  'Europe/Budapest' => 'Europe/Budapest',
  'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
  'Europe/Rome' => 'Europe/Rome',
  'Europe/Riga' => 'Europe/Riga',
  'Europe/Vaduz' => 'Europe/Vaduz',
  'Europe/Vilnius' => 'Europe/Vilnius',
  'Europe/Luxembourg' => 'Europe/Luxembourg',
  'Europe/Malta' => 'Europe/Malta',
  'Europe/Chisinau' => 'Europe/Chisinau',
  'Europe/Monaco' => 'Europe/Monaco',
  'Europe/Amsterdam' => 'Europe/Amsterdam',
  'Europe/Oslo' => 'Europe/Oslo',
  'Europe/Warsaw' => 'Europe/Warsaw',
  'Europe/Lisbon' => 'Europe/Lisbon',
  'Atlantic/Azores' => 'Atlantic/Azores',
  'Atlantic/Madeira' => 'Atlantic/Madeira',
  'Europe/Bucharest' => 'Europe/Bucharest',
  'Europe/Kaliningrad' => 'Europe/Kaliningrad',
  'Europe/Moscow' => 'Europe/Moscow',
  'Europe/Samara' => 'Europe/Samara',
  'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
  'Asia/Omsk' => 'Asia/Omsk',
  'Asia/Novosibirsk' => 'Asia/Novosibirsk',
  'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
  'Asia/Irkutsk' => 'Asia/Irkutsk',
  'Asia/Yakutsk' => 'Asia/Yakutsk',
  'Asia/Vladivostok' => 'Asia/Vladivostok',
  'Asia/Sakhalin' => 'Asia/Sakhalin',
  'Asia/Magadan' => 'Asia/Magadan',
  'Asia/Kamchatka' => 'Asia/Kamchatka',
  'Asia/Anadyr' => 'Asia/Anadyr',
  'Europe/Belgrade' => 'Europe/Belgrade' ,
  'Europe/Madrid' =>'Europe/Madrid' ,
  'Africa/Ceuta' => 'Africa/Ceuta',
  'Atlantic/Canary' => 'Atlantic/Canary',
  'Europe/Stockholm' => 'Europe/Stockholm',
  'Europe/Zurich' => 'Europe/Zurich' ,
  'Europe/Istanbul' => 'Europe/Istanbul',
  'Europe/Kiev' => 'Europe/Kiev',
  'Europe/Uzhgorod' => 'Europe/Uzhgorod',
  'Europe/Zaporozhye' => 'Europe/Zaporozhye',
  'Europe/Simferopol' => 'Europe/Simferopol',
  'America/New_York' => 'America/New_York',
  'America/Chicago' =>'America/Chicago' ,
  'America/North_Dakota/Center' => 'America/North_Dakota/Center',
  'America/Denver' => 'America/Denver',
  'America/Los_Angeles' => 'America/Los_Angeles',
  'America/Juneau' => 'America/Juneau',
  'America/Yakutat' => 'America/Yakutat',
  'America/Anchorage' => 'America/Anchorage',
  'America/Nome' =>'America/Nome' ,
  'America/Adak' => 'America/Adak',
  'Pacific/Honolulu' => 'Pacific/Honolulu',
  'America/Phoenix' => 'America/Phoenix',
  'America/Boise' => 'America/Boise',
  'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
  'America/Indiana/Marengo' => 'America/Indiana/Marengo',
  'America/Indiana/Knox' =>  'America/Indiana/Knox',
  'America/Indiana/Vevay' => 'America/Indiana/Vevay',
  'America/Kentucky/Louisville' =>'America/Kentucky/Louisville'  ,
  'America/Kentucky/Monticello' =>  'America/Kentucky/Monticello' ,
  'America/Detroit' => 'America/Detroit',
  'America/Menominee' => 'America/Menominee',
  'America/St_Johns' => 'America/St_Johns',
  'America/Goose_Bay' => 'America/Goose_Bay' ,
  'America/Halifax' => 'America/Halifax',
  'America/Glace_Bay' =>'America/Glace_Bay' ,
  'America/Montreal' => 'America/Montreal',
  'America/Toronto' => 'America/Toronto',
  'America/Thunder_Bay' => 'America/Thunder_Bay' ,
  'America/Nipigon' => 'America/Nipigon',
  'America/Rainy_River' => 'America/Rainy_River',
  'America/Winnipeg' => 'America/Winnipeg',
  'America/Regina' => 'America/Regina',
  'America/Swift_Current' => 'America/Swift_Current',
  'America/Edmonton' =>  'America/Edmonton',
  'America/Vancouver' => 'America/Vancouver',
  'America/Dawson_Creek' => 'America/Dawson_Creek',
  'America/Pangnirtung' => 'America/Pangnirtung'  ,
  'America/Iqaluit' => 'America/Iqaluit' ,
  'America/Coral_Harbour' => 'America/Coral_Harbour' ,
  'America/Rankin_Inlet' => 'America/Rankin_Inlet',
  'America/Cambridge_Bay' => 'America/Cambridge_Bay',
  'America/Yellowknife' => 'America/Yellowknife',
  'America/Inuvik' =>'America/Inuvik' ,
  'America/Whitehorse' => 'America/Whitehorse' ,
  'America/Dawson' => 'America/Dawson',
  'America/Cancun' => 'America/Cancun',
  'America/Merida' => 'America/Merida',
  'America/Monterrey' => 'America/Monterrey',
  'America/Mexico_City' => 'America/Mexico_City',
  'America/Chihuahua' => 'America/Chihuahua',
  'America/Hermosillo' => 'America/Hermosillo',
  'America/Mazatlan' => 'America/Mazatlan',
  'America/Tijuana' => 'America/Tijuana',
  'America/Anguilla' => 'America/Anguilla',
  'America/Antigua' => 'America/Antigua',
  'America/Nassau' =>'America/Nassau' ,
  'America/Barbados' => 'America/Barbados',
  'America/Belize' => 'America/Belize',
  'Atlantic/Bermuda' => 'Atlantic/Bermuda',
  'America/Cayman' => 'America/Cayman',
  'America/Costa_Rica' => 'America/Costa_Rica',
  'America/Havana' => 'America/Havana',
  'America/Dominica' => 'America/Dominica',
  'America/Santo_Domingo' => 'America/Santo_Domingo',
  'America/El_Salvador' => 'America/El_Salvador',
  'America/Grenada' => 'America/Grenada',
  'America/Guadeloupe' => 'America/Guadeloupe',
  'America/Guatemala' => 'America/Guatemala',
  'America/Port-au-Prince' => 'America/Port-au-Prince',
  'America/Tegucigalpa' => 'America/Tegucigalpa',
  'America/Jamaica' => 'America/Jamaica',
  'America/Martinique' => 'America/Martinique',
  'America/Montserrat' => 'America/Montserrat',
  'America/Managua' => 'America/Managua',
  'America/Panama' => 'America/Panama',
  'America/Puerto_Rico' =>'America/Puerto_Rico' ,
  'America/St_Kitts' => 'America/St_Kitts',
  'America/St_Lucia' => 'America/St_Lucia',
  'America/Miquelon' => 'America/Miquelon',
  'America/St_Vincent' => 'America/St_Vincent',
  'America/Grand_Turk' => 'America/Grand_Turk',
  'America/Tortola' => 'America/Tortola',
  'America/St_Thomas' => 'America/St_Thomas',
  'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos_Aires',
  'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
  'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
  'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
  'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
  'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
  'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
  'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio_Gallegos',
  'America/Argentina/Ushuaia' =>  'America/Argentina/Ushuaia',
  'America/Aruba' => 'America/Aruba',
  'America/La_Paz' => 'America/La_Paz',
  'America/Noronha' => 'America/Noronha',
  'America/Belem' => 'America/Belem',
  'America/Fortaleza' => 'America/Fortaleza',
  'America/Recife' => 'America/Recife',
  'America/Araguaina' => 'America/Araguaina',
  'America/Maceio' => 'America/Maceio',
  'America/Bahia' => 'America/Bahia',
  'America/Sao_Paulo' => 'America/Sao_Paulo',
  'America/Campo_Grande' => 'America/Campo_Grande',
  'America/Cuiaba' => 'America/Cuiaba',
  'America/Porto_Velho' => 'America/Porto_Velho',
  'America/Boa_Vista' => 'America/Boa_Vista',
  'America/Manaus' => 'America/Manaus',
  'America/Eirunepe' => 'America/Eirunepe',
  'America/Rio_Branco' => 'America/Rio_Branco',
  'America/Santiago' => 'America/Santiago',
  'Pacific/Easter' => 'Pacific/Easter' ,
  'America/Bogota' => 'America/Bogota',
  'America/Curacao' => 'America/Curacao',
  'America/Guayaquil' => 'America/Guayaquil',
  'Pacific/Galapagos' => 'Pacific/Galapagos' ,
  'Atlantic/Stanley' => 'Atlantic/Stanley',
  'America/Cayenne' => 'America/Cayenne',
  'America/Guyana' => 'America/Guyana',
  'America/Asuncion' => 'America/Asuncion',
  'America/Lima' => 'America/Lima',
  'Atlantic/South_Georgia' => 'Atlantic/South_Georgia',
  'America/Paramaribo' => 'America/Paramaribo',
  'America/Port_of_Spain' => 'America/Port_of_Spain',
  'America/Montevideo' => 'America/Montevideo',
  'America/Caracas' => 'America/Caracas',
  );

  // OSC begin add default role
  $app_list_strings['default_role_name_list'] = array(
    'Customer Support Administrator' => '顧客サポート管理者',
    'Marketing Administrator' => 'マーケティング管理者',
    'Sales Administrator' => 'セールス管理者',
    'Tracker' => 'トラッカー',
   );
  $app_list_strings['default_role_description_list'] = array(
    'Customer Support Administrator Role' => '顧客サポート管理者の役割',
    'Marketing Administrator Role' => 'マーケティング管理者の役割',
    'Sales Administrator Role' => 'セールス管理者の役割',
    'Tracker Role' => 'トラッカーの役割',
   );
   // OSC end
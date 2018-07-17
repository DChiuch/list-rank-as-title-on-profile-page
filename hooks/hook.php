//<?php

class hook63 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'profile' => 
  array (
    0 => 
    array (
      'selector' => '#elProfileInfoColumn > div.ipsAreaBackground_light.ipsPad > div.ipsWidget.ipsWidget_vertical.cProfileSidebarBlock.ipsBox.ipsSpacer_bottom > div.ipsWidget_inner.ipsPad > ul.ipsDataList.ipsDataList_reducedSpacing.cProfileFields > li.ipsDataItem:eq(0) > span.ipsDataItem_generic.ipsDataItem_size3.ipsType_break > strong',
      'type' => 'replace',
      'content' => '{{if $member->isOnline() AND $member->location}}
  <strong>{lang="online_users_location_lang"}</strong>
{{else}}
  {{if $member->member_title || $member->rank[\'title\'] || $member->rank[\'image\']}}
    <strong>{lang="member_ranks_word_custom"}</strong>
  {else}}
    <strong>{lang="bday"}</strong>
  {{endif}}
{{endif}}',
    ),
    1 => 
    array (
      'selector' => '#elProfileInfoColumn > div.ipsAreaBackground_light.ipsPad > div.ipsWidget.ipsWidget_vertical.cProfileSidebarBlock.ipsBox.ipsSpacer_bottom > div.ipsWidget_inner.ipsPad > ul.ipsDataList.ipsDataList_reducedSpacing.cProfileFields > li.ipsDataItem:eq(1) > span.ipsDataItem_generic.ipsDataItem_size3.ipsType_break > strong',
      'type' => 'replace',
      'content' => '{{if ($member->isOnline() AND $member->location) || $member->member_title || $member->rank[\'title\'] || $member->rank[\'image\']}}
  <strong>{lang="member_ranks_word_custom"}</strong>
{{else}}
  <strong>{lang="bday"}</strong>
{{endif}}',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


























































}
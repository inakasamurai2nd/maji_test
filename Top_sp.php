{literal}
<style type="text/css">
    <!--
    #wrap{
        background: #0d293e;
        color: #FFF;
    }
    img{
        max-width: 100%;
    }
    .cap-leaf-cp {
        {/literal}
        background: url("{image_url('/campaign/common/ttl_bg.jpg')}") left top no-repeat;
        {literal}
        -webkit-background-size: 320px 30px;
        width: 320px;
        height: 30px;
        line-height: 30px;
        color: #fff;
        font-weight: bold;
        text-shadow: -1px -1px 2px #000;
        margin:5px 0;
        text-align: center;
    }
    .mission{
        margin-bottom: 20px;
    }
    .mission p{
        background: #000;
        padding: 5px;
        text-align: center;
        margin: 0;
        font-size:12px;
    }
    .btn{
        text-align: center;;
        margin: 10px auto;
    }
    strong{
        color: #ff0;
        font-size:110%;
    }
    .caution{
        background: #f00;
        font-size: 90%;
        text-align: center;
    }
    .nowNum{
        font-size:24px;
        line-height:100%;
    }
    .blink{
        color: #ff0;
        text-decoration: blink;
    }
    .clearStatus{
        background: #49576b ;
        color:#FF0;
        width: 80%;
        margin: 5px auto;
        border-radius: 20px;
        padding: 5px;
        text-align: center;
    }
    //-->
</style>
{/literal}

<div id="wrap"><!-- wrap START -->
    <img src="{image_url('/campaign/ft/ft_header.jpg')}" width="100%" /><br />

    <div style="width:90%;background:#003366;margin:4px auto;padding:5px;border-radius:4px;-webkit-border-radius:4px;border:2px solid #66ccff;text-align:center;font-size:80%;">
    期間中「フェアリーテイル」で遊ぶと「テイルズ オブ カード エボルブ」で豪華報酬が貰える<br />コラボキャンペーン中!!<br />
        <a href="javascript:GREE.ui({ldelim}'method': 'open', 'view': 'xapp', 'campaign_id': '{$smarty.const.GXAPP_FROM_CAMPAIGN_ID}'{rdelim});"><img class="btn" style="margin-bottom: 5px" src="{image_url('/campaign/ft/ft_btn_play.png')}" width="95%" /></a>
        <div class="blink" style="font-size:130%">EXミラ(ルーシィ衣装)をGETしよう!</div>
    </div>


    <div class="doratac_nomTxt" style="text-align:center;">
        [キャンペーン期間]<br />
        <span style="font-size:95%; letter-spacing: -1px;">{$event_data.open_date|date_format:"%Y年%m月%d日 %H:%M"}～{$event_data.close_date|date_format:"%Y年%m月%d日 %H:%M"}</span><br />
        報酬交換は<br />
        <div class="blink">{$event_data.reward_close_date|date_format:"%Y年%m月%d日 %H:%M"}マデ</div>
    </div>

    {** 報酬 **}
    <div class="cap-leaf-cp">ミッションクリアで報酬をGET!</div>

    <img src="{image_url('/card_comment_01.jpg')}" width="100%" />
    <div class="card-mini-cap" style="margin:4px 4px;">
        <ul>
            <li>ミラ(ルーシィ衣装)</li>
            <li><p class="reality-EX"></p></li>
            <li><p class="genus-blc"></p></li>
        </ul>
    </div>
    <!--
    <div class="clearfix">
        <div style="float:left;width:50%;text-align:center">
            <img src="{image_url('w640/card/fL/2817.jpg')}" style="-webkit-box-shadow: 0px 0px 10px rgba(000,000,000,0.5);width:95%;" />
        </div>
        <div style="float:left;width:50%; text-align:center">
            <img src="{image_url('w640/card/fL/2818.jpg')}" style="-webkit-box-shadow: 0px 0px 10px rgba(000,000,000,0.5);width:95%;" />
        </div>
    </div>
    <div class="blink" style="font-size:110%">▼ 最終進化するとこうなるぞ! ▼</div>
    -->
    <div class="clearfix">
        <div style="float:center;position:relative;">
            <img src="{image_url('w640/card/L/2858.jpg')}" style="-webkit-box-shadow: 0px 0px 10px rgba(000,000,000,0.5);width:320px;height:480px;" />
        </div>
        <div>
            <ul style="text-align:center;margin-left:8px;line-height:1.4;padding-top:10px;">
                <li><span class="txt-sub">バトルコスト：</span>25 <span class="txt-sub">MAX攻撃：</span>2600<span style="font-size:80%;">以上</span></li>
                <li><span class="txt-sub">MAX防御：</span>2400<span style="font-size:80%;">以上</span> <span class="txt-sub">MAX敏捷：</span>2500<span style="font-size:80%;">以上</span></li>
            </ul>
            <ul style="text-align:left;margin-left:8px;line-height:1.4;">
                <li><span class="txt-sub">術技：</span>アリーヴェデルチ</li>
                <li><span class="txt-sub">効果：</span>[Rank3]攻撃力:大UP  発生確率:大</li>
            </ul>
        </div>
        <div style="text-align:center; padding:2px;">
            <span style="color: #ff0;">※EXミラはトレード不可となります。</span><br />
        </div>
    </div>
<!--
    {** 報酬アイコン **}
    <table>
        <tr>
            <td width="25%" align="center"><img src="{image_url('/campaign/ft/ft_item01.png')}" width="95%" /></td>
            <td width="25%" align="center"><img src="{image_url('/campaign/ft/ft_item02.png')}" width="95%" /></td>
            <td width="25%" align="center"><img src="{image_url('/campaign/ft/ft_item03.png')}" width="95%" /></td>
            <td width="25%" align="center"><img src="{image_url('/campaign/ft/ft_item04.png')}" width="95%" /></td>
        </tr>
    </table>
-->
<p class="caution">ミッションクリア後、本ページにアクセスすると報酬が付与されます</p>

<div class="right-link"><a href="{$Link['cross_promotion']}/item_list/">ミッション達成報酬一覧はこちら</a></div>


{** コラボ ミッション **}
<div class="cap-leaf-cp">コラボ ミッション</div>

{** tab **}
<div id="missionTop" class="select-item-2way" style="border-bottom:4px solid #ab891c">
    <ul class="clearfix" style="line-height:120%">
        <li class="selected" style="padding:4px 0;">ﾌｪｱﾘｰﾃｲﾙ<br />ﾐｯｼｮﾝ</li>
        <li class="non"><a href="{$Link['cross_promotion']}/tales_mission#missionTop" style="padding:2px 0">ﾃｲﾙｽﾞｵﾌﾞｶｰﾄﾞｴﾎﾞﾙﾌﾞ<br />ﾐｯｼｮﾝ</a></li>
    </ul>
</div>
{** /tab **}

<div class="brown-top"></div>
<div style="font-size:90%;margin:10px 5px;">フェアリーテイルでミッションをクリアすると、テイルズオブカードエボルブで報酬がGETできます！</div>

{** ミッション1 **}
<div class="mission">
    <img src="{image_url('/campaign/ft/ft_mission1.png')}" />
    <p>
        遊び方を覚えよう!チュートリアル突破で<br />
        <strong>Rチケット</strong>をGET！<br />
    </p>
    {if !$mission_list[$smarty.const.GXAPP_FROM_GUILD_ID].is_mission}
    <a href="javascript:GREE.ui({ldelim}'method': 'open', 'view': 'xapp', 'campaign_id': '{$smarty.const.GXAPP_FROM_CAMPAIGN_ID}'{rdelim});"><img class="btn" src="{image_url('/campaign/common/btn_active.png')}" width="78%" /></a>
    {else}
    <img class="btn" src="{image_url('/campaign/common/btn_disable.png')}" width="78%" />
    {/if}
</div>
{** /ミッション1 **}


{** ミッション2 **}
<div class="mission">
    <img src="{image_url('/campaign/ft/ft_mission2.png')}" />
    <p>
        ギルメンと仲良くなろう!<br />
        <strong>(自分用)レモングミ</strong>を1日1個プレゼント!<br />
    </p>
    <a href="javascript:GREE.ui({ldelim}'method': 'open', 'view': 'xapp', 'campaign_id': '{$smarty.const.GXAPP_FROM_CAMPAIGN_ID}'{rdelim});"><img class="btn" src="{image_url('/campaign/common/btn_active.png')}" width="78%" /></a>
    {*
    {if !$mission_list[$smarty.const.GXAPP_FROM_MOODSEND_ID_5].is_mission}
    <a href="javascript:GREE.ui({ldelim}'method': 'open', 'view': 'xapp', 'campaign_id': '{$smarty.const.GXAPP_FROM_CAMPAIGN_ID}'{rdelim});"><img class="btn" src="{image_url('/campaign/common/btn_active.png')}" width="78%" /></a>
    {else}
    <img class="btn" src="{image_url('/campaign/common/btn_disable.png')}" width="78%" />
    {/if}
    *}
    {if 0<$moodsend_day}
    <div class="clearStatus">{$moodsend_day}日目達成！</div>
    {/if}
</div>
{** /ミッション2 **}



{** ミッション3 **}
<div class="mission">
    <img src="{image_url('/campaign/ft/ft_mission3.png')}" />
    <p>
        毎日ログインで日替わり報酬GET！<br />
        5日目には<strong>EXミラ(ルーシィ衣装)</strong>が貰える!<br />
    </p>
    {if !$mission_list[$smarty.const.GXAPP_FROM_LEVEL_ID].is_mission}
    <a href="javascript:GREE.ui({ldelim}'method': 'open', 'view': 'xapp', 'campaign_id': '{$smarty.const.GXAPP_FROM_CAMPAIGN_ID}'{rdelim});"><img class="btn" src="{image_url('/campaign/common/btn_active.png')}" width="78%" /></a>
    {else}
    <img class="btn" src="{image_url('/campaign/common/btn_disable.png')}" width="78%" />
    {/if}
</div>
{** /ミッション3 **}



{** ミッション4 **}
<div class="mission">
    <img src="{image_url('/campaign/ft/ft_mission4.png')}" />
    <p>
        レベルアップで強くしよう!<br />
        Lv10で<strong>(自分用)レモングミ</strong>をGET!<br />
    </p>
    {if !$mission_list[$smarty.const.GXAPP_FROM_BATTLE_ID_1].is_mission}
    <a href="javascript:GREE.ui({ldelim}'method': 'open', 'view': 'xapp', 'campaign_id': '{$smarty.const.GXAPP_FROM_CAMPAIGN_ID}'{rdelim});"><img class="btn" src="{image_url('/campaign/common/btn_active.png')}" width="78%" /></a>
    {else}
    <img class="btn" src="{image_url('/campaign/common/btn_disable.png')}" width="78%" />
    {/if}
</div>
{** /ミッション4 **}



{** ミッション5 **}
<div class="mission">
    <img src="{image_url('/campaign/ft/ft_mission5.png')}" />
    <p>
        レベルアップで強くしよう!<br />
        Lv20で<strong>HRチケット</strong>をGET!<br />
    </p>
    {if !$mission_list[$smarty.const.GXAPP_FROM_RAIDBOSS_ID_1].is_mission}
    <a href="javascript:GREE.ui({ldelim}'method': 'open', 'view': 'xapp', 'campaign_id': '{$smarty.const.GXAPP_FROM_CAMPAIGN_ID}'{rdelim});"><img class="btn" src="{image_url('/campaign/common/btn_active.png')}" width="78%" /></a>
    {else}
    <img class="btn" src="{image_url('/campaign/common/btn_disable.png')}" width="78%" />
    {/if}
</div>
{** /ミッション5 **}



{** ミッション6 **}
<div class="mission">
    <img src="{image_url('/campaign/ft/ft_mission6.png')}" />
    <p>
        友だちを招待して盛り上げよう!<br />
        招待送信するだけで<strong>(自分用)レモングミ</strong>をGET！<br />
    </p>
    {if !$mission_list[$smarty.const.GXAPP_FROM_INVITE_ID_5].is_mission}
    <a href="javascript:GREE.ui({ldelim}'method': 'open', 'view': 'xapp', 'campaign_id': '{$smarty.const.GXAPP_FROM_CAMPAIGN_ID}'{rdelim});"><img class="btn" src="{image_url('/campaign/common/btn_active.png')}" width="78%" /></a>
    {else}
    <img class="btn" src="{image_url('/campaign/common/btn_disable.png')}" width="78%" />
    {/if}
    {if 0<$invite_count}
    <div class="clearStatus">{$invite_count}人目達成！</div>
    {/if}
</div>
{** /ミッション6 **}


{** ミッション7 **}
<div class="mission">
    <img src="{image_url('/campaign/ft/ft_mission7.png')}" />
    <p>
        カードを育てよう!<br />
        MASTER到達で<strong>うしにんx3</strong>をGET！<br />
    </p>
    {if !$mission_list[$smarty.const.GXAPP_FROM_INVITE_ID_5].is_mission}
    <a href="javascript:GREE.ui({ldelim}'method': 'open', 'view': 'xapp', 'campaign_id': '{$smarty.const.GXAPP_FROM_CAMPAIGN_ID}'{rdelim});"><img class="btn" src="{image_url('/campaign/common/btn_active.png')}" width="78%" /></a>
    {else}
    <img class="btn" src="{image_url('/campaign/common/btn_disable.png')}" width="78%" />
    {/if}
    {if 0<$invite_count}
    <div class="clearStatus">{$invite_count}人目達成！</div>
    {/if}
</div>
{** /ミッション7 **}

{line()}
<div style="text-align: center">
    <a href="javascript:GREE.ui({ldelim}'method': 'open', 'view': 'xapp', 'campaign_id': '{$smarty.const.GXAPP_FROM_CAMPAIGN_ID}'{rdelim});"><img class="btn" style="margin-bottom: 5px" src="{image_url('/campaign/doratac/doratac_btn_play.png')}" width="78%" /></a>
    <div class="blink" style="margin-bottom: 10px">SRミラ(ルーシィ衣装)をGETしよう!</div>
</div>

{line()}
<div class="right-link"><a href="{$Link['cross_promotion']}/item_list/">ミッション達成報酬一覧はこちら</a></div>
{line()}

<div style="font-size:65%; margin-top:5px">
    &copy真島ヒロ・講談社／フェアリーテイル製作委員会・テレビ東京<br />
    &copyGREE, Inc.／TAITO CORP. 2013, 2014
</div>

<div class="warn">
    [注意事項]<br />
    <p>
        ・ひとこと送信は、1日1回までとなります。<br />
        ・ひとこと送信は、毎日4:00にリセットされます。<br />
        ・ひとこと送信1日目は、{$event_data.open_date|date_format:"%Y年%m月%d日 %H:%M"} ～ 6/27 3:59となりますのでご注意ください。<br />
        ・「フェアリーテイルコラボキャンペーン」は{$event_data.open_date|date_format:"%Y年%m月%d日 %H:%M"}〜{$event_data.close_date|date_format:"%Y年%m月%d日 %H:%M"}までを予定しております。<br />
        ・報酬交換は{$event_data.reward_close_date|date_format:"%Y年%m月%d日 %H:%M"}までになります。<br />
        ・報酬を受け取るためには、ミッション達成後に、本ページにアクセスする必要があります。ミッション達成だけでは、報酬を受取る事は出来ません。<br />
        ・報酬は全てプレゼントボックスに届きます。<br />
        ・本キャンペーンは予定なく内容を変更、または終了させて頂く場合があります。<br />

    </p>
</div>

</div><!-- wrapper END -->

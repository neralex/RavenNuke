<?php
/**************************************************************************/
/* nukeNAV(tm)
/*
/* Copyright (c) 2009, Kevin Guske  http://nukeseo.com
/*
/* This program is free software. You can redistribute it and/or modify it
/* under the terms of the GNU General Public License as published by the
/* Free Software Foundation, version 2 of the license.
/**************************************************************************/
// nukeSEO DH
if (!defined('_DH_COMMON')) define('_DH_COMMON','able,about,above,according,accordingly,across,act,actually,add,afraid,after,afterwards,again,against,age,ago,agree,all,allow,allows,almost,alone,along,already,also,although,always,am,among,amongst,amount,an,and,anger,angry,animal,another,answer,any,anybody,anyhow,anyone,anything,anyway,anyways,anywhere,apart,appear,apple,appreciate,appropriate,are,arrive,arm,arms,around,arrive,as,aside,asking,ask,associated,at,attempt,available,aunt,away,awfully,back,bad,bag,bay,be,became,because,become,becomes,becoming,been,before,beforehand,behind,began,begin,behind,being,believe,bell,belong,below,beside,besides,best,better,between,beyond,big,body,bone,born,borrow,both,bottom,box,boy,break,brief,bring,brought,bug,built,busy,but,buy,by,call,came,can,cannot,cant,cause,causes,certain,certainly,changes,choose,clear,clearly,close,closing,come,comes,concerning,consequently,consider,considerable,considering,contain,containing,contains,continue,correspond,corresponding,could,course,cry,current,currently,cut,dare,dark,deal,dear,decide,definitely,deep,describe,described,despite,did,different,die,do,does,dog,doing,done,doubt,down,downward,downwards,during,each,ear,early,eat,effort,eight,either,else,elsewhere,end,enjoy,enough,enter,entirely,especially,etc,even,ever,every,everybody,everyone,everything,everywhere,exactly,example,except,expect,explain,fail,fall,far,fat,favor,fear,feel,feet,fell,felt,few,fifth,fill,find,first,fit,five,fly,follow,followed,following,follows,for,forever,forget,former,formerly,forth,four,from,front,further,furthermore,gave,get,gets,getting,given,gives,go,goes,going,gone,good,got,gotten,gray,great,green,greetings,grew,grow,guess,had,half,hang,happen,happens,hardly,has,hat,have,having,he,hear,heard,held,hello,help,hence,her,here,hereafter,hereby,herein,hereupon,hers,herself,hi,high,hill,him,himself,his,hit,hither,hold,hope,hopefully,hot,how,however,if,ignore,ignored,ill,immediate,immediately,in,inasmuch,inc,indeed,indicate,indicated,indicates,inner,insofar,instead,into,inward,iron,is,it,its,itself,just,keep,keeps,kept,knew,know,knows,known,late,last,late,lately,later,latter,latterly,least,led,left,lend,less,lest,let,like,liked,likely,little,lone,long,look,looking,looks,lot,ltd,main,mainly,make,many,may,maybe,me,mean,meanwhile,merely,met,might,mile,mine,moon,more,moreover,most,mostly,move,much,must,my,myself,name,namely,near,nearly,necessary,need,needs,neither,never,nevertheless,new,next,nine,no,nobody,non,none,noone,nor,normally,not,note,nothing,novel,now,nowhere,number,obviously,of,off,often,oh,ok,okay,old,on,once,one,ones,only,onto,or,other,others,otherwise,ought,our,ours,ourselves,out,outside,over,overall,own,particular,particularly,per,perhaps,placed,please,plus,possible,prepare,presumably,presume,probable,probably,provides,pull,pure,push,put,que,quite,qv,raise,ran,rather,rd,re,reach,realize,really,reasonable,reasonably,regarding,regardless,regards,relatively,reply,require,respect,respectively,rest,right,run,said,same,sat,saw,say,saying,says,second,secondly,seconds,see,seeing,seem,seemed,seeming,seems,seen,self,sell,selves,sensible,sensibly,sent,separate,serious,seriously,set,seven,several,shall,she,should,side,sign,since,six,so,sold,some,somebody,somehow,someone,something,sometime,sometimes,somewhat,somewhere,soon,sorry,specified,specify,specifying,stay,step,stick,still,stood,sub,such,sudden,suppose,sure,take,taken,talk,tall,tell,ten,tends,than,thank,thanks,thanx,that,the,their,theirs,them,themselves,then,thence,there,thereafter,thereby,therefore,therein,thereupon,these,they,think,third,this,thorough,thoroughly,those,though,three,through,throughout,thru,thus,till,to,today,together,told,tomorrow,too,took,tore,toward,towards,tried,tries,truly,trust,try,trying,turn,twice,two,under,unfortunate,unfortunately,unless,unlike,unlikely,until,unto,up,upon,us,use,used,useful,uses,using,usual,usually,value,various,verb,very,via,visit,want,wants,was,way,we,welcome,well,went,were,what,whatever,when,whence,whenever,where,whereafter,whereas,whereby,wherein,whereupon,wherever,whether,which,while,white,whither,who,whoever,whole,whom,whose,why,will,willing,wish,with,within,without,wonder,would,yes,yet,you,young,your,yours,yourself,yourselves,zero,br,img,p,lt,gt,quot,copy');

// nukeNAV - menu
if (!defined('_NAV_NEWS')) define('_NAV_NEWS','Notizie');
if (!defined('_NAV_AUTHART')) define('_NAV_AUTHART','Autori ed articoli');
if (!defined('_NAV_STORARCH')) define('_NAV_STORARCH','Archivio articoli');
if (!defined('_NAV_TOPICS')) define('_NAV_TOPICS','Argomenti');
if (!defined('_NAV_SUBMITNEWS')) define('_NAV_SUBMITNEWS','Scrivi articolo');
if (!defined('_NAV_FORUMS')) define('_NAV_FORUMS','Forum');
if (!defined('_NAV_NEWPOSTS')) define('_NAV_NEWPOSTS','Nuovi interventi sul forum');
if (!defined('_NAV_UNANSWERED')) define('_NAV_UNANSWERED','Interventi senza risposta');
if (!defined('_NAV_YOURPOSTS')) define('_NAV_YOURPOSTS','I tuoi interventi');
if (!defined('_NAV_ADMINMODS')) define('_NAV_ADMINMODS','Moduli in amministrazione');
if (!defined('_NAV_YOURACCOUNT')) define('_NAV_YOURACCOUNT','Il tuo Account');
if (!defined('_NAV_PM')) define('_NAV_PM','Messaggi privati');
if (!defined('_NAV_PREFS')) define('_NAV_PREFS','Preferenze');
if (!defined('_NAV_CHGTHEME')) define('_NAV_CHGTHEME','Cambia tema');
if (!defined('_NAV_SITEINFO')) define('_NAV_SITEINFO','Info sul sito');
if (!defined('_NAV_SITEMAP')) define('_NAV_SITEMAP','Mappa del sito');
if (!defined('_NAV_CONTACTS')) define('_NAV_CONTACTS','Contatti');
if (!defined('_NAV_FEEDBACK')) define('_NAV_FEEDBACK','Contattaci');
if (!defined('_NAV_RECOMMEND')) define('_NAV_RECOMMEND','Raccomandaci');
if (!defined('_NAV_HOWTOINSTALL')) define('_NAV_HOWTOINSTALL','How to Install');
if (!defined('_NAV_LEGAL')) define('_NAV_LEGAL','Legal');
if (!defined('_NAV_MEMBERS')) define('_NAV_MEMBERS','Membri');
if (!defined('_NAV_STATS')) define('_NAV_STATS','Statistiche');
if (!defined('_NAV_CREDITS')) define('_NAV_CREDITS','Credits');
if (!defined('_NAV_ADMIN')) define('_NAV_ADMIN','Admin');
if (!defined('_NAV_ACP')) define('_NAV_ACP','Panello amministrazione');
if (!defined('_NAV_APPEARANCE')) define('_NAV_APPEARANCE','Appearance');
if (!defined('_NAV_BLOCKS')) define('_NAV_BLOCKS','Blocchi');
if (!defined('_NAV_MSGS')) define('_NAV_MSGS','Messaggi');
if (!defined('_NAV_MODS')) define('_NAV_MODS','Moduli');
if (!defined('_NAV_LGL')) define('_NAV_LGL','Legal');
if (!defined('_NAV_SETTINGS')) define('_NAV_SETTINGS','Configurazione sito');
if (!defined('_NAV_ADMINS')) define('_NAV_ADMINS','Amministratori');
if (!defined('_NAV_GROUPS')) define('_NAV_GROUPS','Gruppi');
if (!defined('_NAV_POINTS')) define('_NAV_POINTS','Punti');
if (!defined('_NAV_SECURITY')) define('_NAV_SECURITY','Security');
if (!defined('_NAV_UTILS')) define('_NAV_UTILS','Utilities');
if (!defined('_NAV_BACKUP')) define('_NAV_BACKUP','Backup');
if (!defined('_NAV_OPTIMIZE')) define('_NAV_OPTIMIZE','Optimize');
if (!defined('_NAV_MAILER')) define('_NAV_MAILER','Mailer');
if (!defined('_NAV_NEWSTORY')) define('_NAV_NEWSTORY','New Story');
if (!defined('_NAV_CHGPOLL')) define('_NAV_CHGPOLL','Cambia sondaggio');
if (!defined('_NAV_COMMENTS')) define('_NAV_COMMENTS','Commenti');
if (!defined('_NAV_NEWS')) define('_NAV_NEWS','Notizie');

// nukeNAV - SEO modal dialog
if (!defined('_HEAD_TAG')) define('_HEAD_TAG','HEAD Tag');
if (!defined('_OVERRIDE_TAG')) define('_OVERRIDE_TAG','Override Tag');
if (!defined('_GENERATED_TAG')) define('_GENERATED_TAG','Generated Tag');
if (!defined('_TITLE')) define('_TITLE','Title');
if (!defined('_TITLE_HLP')) define('_TITLE_HLP','Recommended limits: <strong>70 to 90 characters</strong><br /><br />The page title is defined in the TITLE META tag and may be the <span class="thick">most important attribute</span> for search engine rankings. The page title should contain a coherent description of the page, and contain key words that are located within the page content.');
if (!defined('_DESCRIPTION')) define('_DESCRIPTION','Description');
if (!defined('_DESCRIPTION_HLP')) define('_DESCRIPTION_HLP','Recommended limits: <strong>At least 180-200 characters, with no more than 1000	characters</strong><br /><br />The DESCRIPTION META tag should contain a coherent description of the page, and should contain words that are located within the page content.');
if (!defined('_KEYWORDS')) define('_KEYWORDS','Keywords');
if (!defined('_KEYWORDS_HLP')) define('_KEYWORDS_HLP','Recommended limits: <strong>12 or fewer	words / phrases, up to 255 characters</strong><br /><br />For best results with the KEYWORDS META tag, select 12 of the most popular and relevant keywords to that particular page, ideally keyword phrases of 2 to 3 words, separated by a comma. Ensure that the keywords you use are located in the title, description and content of the page. If they are not, DO NOT add extra words, otherwise the theme of your page will be watered down. The ordering also plays a role, make sure you order the keywords in order of importance.');
if (!defined('_OVERRIDE_TAGS')) define('_OVERRIDE_TAGS','Override META Tags');
if (!defined('_OVERRIDE_META')) define('_OVERRIDE_META','Save overrides');
if (!defined('_NAV_VARIABLES')) define('_NAV_VARIABLES','% Variables');
if (!defined('_NAV_VARIABLES_HLP')) define('_NAV_VARIABLES_HLP','Several variables are available for use in HEAD tags:<br /><ul><li><span class="thick">%sitename%</span> - the Site Name setting in Admin, Preferences (aka Site Settings)</li><li><span class="thick">%slogan%</span> - the Site Slogan setting in Admin, Preferences (aka Site Setttings)</li><li><span class="thick">%module%</span> - the current module title</li><li><span class="thick">%year%</span> - the current 4-digit Gregorian year (e.g. 2009 for Copyright)</li></ul>These variables are lower case and must be preceeded and succeeded by %.');
if (!defined('_NAV_LEVEL')) define('_NAV_LEVEL','HEAD Tag Level');
if (!defined('_NAV_LEVEL_HLP')) define('_NAV_LEVEL_HLP','HEAD tags may be generated and overridden at the following levels using the highest level of detail that applies:<br /><br />0. <span class="thick">Site</span> (index page)<br />1. <span class="thick">Module</span><br />2. <span class="thick">Category</span> (e.g. Forum Category)<br />3. <span class="thick">Subcategory</span> (e.g. Forum)<br />4. <span class="thick">Content</span> (e.g. Forum Topic, News story)<br /><br />Note: The site level override is required and cannot be deleted.');
if (!defined('_LEVEL0')) define('_LEVEL0','Site');
if (!defined('_LEVEL1')) define('_LEVEL1','Module');
if (!defined('_LEVEL2')) define('_LEVEL2','Category');
if (!defined('_LEVEL3')) define('_LEVEL3','Subcategory');
if (!defined('_LEVEL4')) define('_LEVEL4','Content');
if (!defined('_DELETE_OVERRIDES')) define('_DELETE_OVERRIDES','Delete Overrides');
if (!defined('_OVERRIDES_DELETED')) define('_OVERRIDES_DELETED','The override HEAD tags were deleted. Refresh the page to see changes.');
if (!defined('_OVERRIDES_SAVED')) define('_OVERRIDES_SAVED','The override HEAD tags were saved. Refresh the page to see changes.');
?>
$(document).ready((function(){$("#g-navigation .u-NavSite__level--navLink").remove(),$("#menu .menu-main-navigation-container").clone().appendTo(".u-NavSite--global"),$(".u-NavSite--global .menu-main-navigation-container").attr("aria-hidden","true");const a=["9_Campus.jpg","0093_14_10_KR_0103.jpg","0110_15_10_TT_6291_edit.jpg","0162_14_11_TT_2262.jpg","0177_16_09_KR_0066.jpg","Vassar_Campus_20190508_KR_4959.jpg","0019_12_04_TT_0796.jpg","banner-0213-18-11-kr-quad-fall-vassar-6287.jpg","0121_15_11_CS_038.jpg","Athletics-10-11-trackpanorama.jpg","banner-0088_18_05_KR_8.jpg","banner-0105_14_11_TT_2872.jpg","banner-0155_13_11_TT_9663.jpg","banner-0191-19-10-ali-amphitheater-drone-vassar-vb-2048.jpg","banner-0204-17-08-ifu-gordon-commons-vassar-8943.jpg","banner-bridge-0059-17-06-kr-vassar-0076.jpg","banner-campus-1910-ja-vassar-vb-0017.jpg","banner-campus-1910-ja-vassar-vb-0043.jpg","banner-campus-gate-fall-15-tt-1.jpg","banner-community-0148-18-11-kr-walkway-vassar-6092.jpg","banner-main-0069-19-05-kr-spring-vassar-5091.jpg","banner-Sunset-Lake-15-TT_1519.jpg","banner-taylor-raymond-0069-19-05-kr-spring-vassar-4221.jpg","header-bg-0139_Vassar-College_exteriors-campus-life_Oct-2019_JA.jpg","header-bg-0191-19-10-ali-bridge-drone-vassar-vb-2044.jpg","header-bg-0317_Vassar-College_exteriors-campus-life_Oct-2019_JA.jpg","header-bg-0431_Vassar-College_exteriors-campus-life_Oct-2019_JA.jpg"],e=a[Math.floor(Math.random()*a.length)];var n=Math.floor(5*Math.random()+1);n="url(/assets/wp-content/uploads/sites/51/2020/06/"+e+")",document.documentElement.style.setProperty("--banner",n),$(".blocks-gallery-grid").flickity({cellAlign:"left",contain:!0})}));
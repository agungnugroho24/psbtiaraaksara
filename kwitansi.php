<?php
session_start();
include 'dbcon.php';
include'session_anggota.php';
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<link rel='stylesheet' href='gaya.css'>
    <?php 
    echo "<script type='text/javascript'>javascript:window.print()</script>";
    ?>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="kwitansi_files/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style id="Format+KWITANSI - Copy_19050_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.font519050
	{color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl6519050
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6619050
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6719050
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6819050
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6919050
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7019050
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7119050
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7219050
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7319050
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7419050
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7519050
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->
</style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Format+KWITANSI - Copy_19050" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=678 class=xl6519050
 style='border-collapse:collapse;table-layout:fixed;width:510pt'>
 <col class=xl6519050 width=14 style='mso-width-source:userset;mso-width-alt:
 398;width:11pt'>
 <col class=xl6519050 width=153 style='mso-width-source:userset;mso-width-alt:
 4352;width:115pt'>
 <col class=xl6519050 width=66 style='mso-width-source:userset;mso-width-alt:
 1877;width:50pt'>
 <col class=xl6519050 width=33 style='mso-width-source:userset;mso-width-alt:
 938;width:25pt'>
 <col class=xl6519050 width=80 span=2 style='width:60pt'>
 <col class=xl6519050 width=47 style='mso-width-source:userset;mso-width-alt:
 1336;width:35pt'>
 <col class=xl6519050 width=80 style='width:60pt'>
 <col class=xl6519050 width=103 style='mso-width-source:userset;mso-width-alt:
 2929;width:77pt'>
 <col class=xl6519050 width=22 style='mso-width-source:userset;mso-width-alt:
 625;width:17pt'>
 
<?php $sql= mysql_query("SELECT pembayaran.biayabangunan,pembayaran.biayaspp,pembayaran.biayaseragam,pembayaran.bpp,pembayaran.total,tb_psb_data.idpsb             
FROM pembayaran   
INNER JOIN tb_psb_data            
ON pembayaran.idpsb=tb_psb_data.idpsb         
WHERE tb_psb_data.nopen='$session_id'")or die(mysql_error());
		$r = mysql_fetch_array($sql);
		
		$today = date("d-M-Y");
			?>
 

 <tr height=8 style='mso-height-source:userset;height:6.0pt'>
  <td height=8 class=xl6519050 style='height:6.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=14 style='mso-height-source:userset;height:10.5pt'>
  <td height=14 class=xl6619050 style='height:10.5pt'>&nbsp;</td>
  <td class=xl6719050>&nbsp;</td>
  <td class=xl6719050>&nbsp;</td>
  <td class=xl6719050>&nbsp;</td>
  <td class=xl6719050>&nbsp;</td>
  <td class=xl6719050>&nbsp;</td>
  <td class=xl6719050>&nbsp;</td>
  <td class=xl6719050>&nbsp;</td>
  <td class=xl6719050>&nbsp;</td>
  <td class=xl6819050>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6919050 style='height:15.0pt'>&nbsp;</td>
  <td colspan=8 class=xl7519050>KWITANSI PEMBAYARAN<span
  style='mso-spacerun:yes'>�</span></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=8 style='mso-height-source:userset;height:6.0pt'>
  <td height=8 class=xl6919050 style='height:6.0pt'>&nbsp;</td>
  <td align=left valign=top><!--[if gte vml 1]><v:shapetype id="_x0000_t75"
   coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe"
   filled="f" stroked="f">
   <v:stroke joinstyle="miter"/>
   <v:formulas>
    <v:f eqn="if lineDrawn pixelLineWidth 0"/>
    <v:f eqn="sum @0 1 0"/>
    <v:f eqn="sum 0 0 @1"/>
    <v:f eqn="prod @2 1 2"/>
    <v:f eqn="prod @3 21600 pixelWidth"/>
    <v:f eqn="prod @3 21600 pixelHeight"/>
    <v:f eqn="sum @0 0 1"/>
    <v:f eqn="prod @6 1 2"/>
    <v:f eqn="prod @7 21600 pixelWidth"/>
    <v:f eqn="sum @8 21600 0"/>
    <v:f eqn="prod @7 21600 pixelHeight"/>
    <v:f eqn="sum @10 21600 0"/>
   </v:formulas>
   <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
   <o:lock v:ext="edit" aspectratio="t"/>
  </v:shapetype><v:shape id="Picture_x0020_9" o:spid="_x0000_s1194" type="#_x0000_t75"
   style='position:absolute;margin-left:56.25pt;margin-top:3.75pt;width:53.25pt;
   height:48.75pt;z-index:2;visibility:visible' o:gfxdata="UEsDBBQABgAIAAAAIQBamK3CDAEAABgCAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRwU7DMAyG
70i8Q5QralM4IITW7kDhCBMaDxAlbhvROFGcle3tSdZNgokh7Rjb3+8vyWK5tSObIJBxWPPbsuIM
UDltsK/5x/qleOCMokQtR4dQ8x0QXzbXV4v1zgOxRCPVfIjRPwpBagArqXQeMHU6F6yM6Rh64aX6
lD2Iu6q6F8phBIxFzBm8WbTQyc0Y2fM2lWcTjz1nT/NcXlVzYzOf6+JPIsBIJ4j0fjRKxnQ3MaE+
8SoOTmUi9zM0GE83SfzMhtz57fRzwYF7S48ZjAa2kiG+SpvMhQ4kvFFxEyBNlf/nZFFLhes6o6Bs
A61m8ih2boF2XxhgujS9Tdg7TMd0sf/X5hsAAP//AwBQSwMEFAAGAAgAAAAhAAjDGKTUAAAAkwEA
AAsAAABfcmVscy8ucmVsc6SQwWrDMAyG74O+g9F9cdrDGKNOb4NeSwu7GltJzGLLSG7avv1M2WAZ
ve2oX+j7xL/dXeOkZmQJlAysmxYUJkc+pMHA6fj+/ApKik3eTpTQwA0Fdt3qaXvAyZZ6JGPIoiol
iYGxlPymtbgRo5WGMqa66YmjLXXkQWfrPu2AetO2L5p/M6BbMNXeG+C934A63nI1/2HH4JiE+tI4
ipr6PrhHVO3pkg44V4rlAYsBz3IPGeemPgf6sXf9T28OrpwZP6phof7Oq/nHrhdVdl8AAAD//wMA
UEsDBBQABgAIAAAAIQD3m6ISZgIAAJ0FAAASAAAAZHJzL3BpY3R1cmV4bWwueG1srFTbitswEH0v
9B+M3hNLjhMnJs6SJrulsLShtB+gleVY1JaMpFyW0n/vSLITwrK0dPs21ozmHJ0z4+XduW2iI9dG
KFkgMsYo4pKpUsh9gb5/exjNUWQslSVtlOQFeuYG3a3ev1ueS51TyWqlI2ghTQ4HBaqt7fI4Nqzm
LTVj1XEJ2Urpllr41Pu41PQEzdsmTjCexabTnJam5txuQwatfG97UhveNOsAwUth16ZAwMGd9jWV
Vm2oZqpZkWXsSLnQd4DgS1WtMpJOsukl5458WqvTKknCuYuHQ1eQZrNkdkn5K773FdCqC8hrwGSy
wLMpfgX52v4GeTFNeq7A6Qo8wHWChXJ53Am20z2Jz8edjkQJBoJ/krZgFKTtQfNogeJrUbhCc2jz
qNgP01tH/8G4lgoJWGpTU7nna9NxZgHfoQUbgFOA8583fJ8a0T2IBnyiuYvfTCNM4F/Nn6oqwfhW
sUPLpQ1DqHlDLSyAqUVnUKRz3j5xUFN/KgmMGs352T4a20fRQYsC/Uzma4wXyYfRZoo3oxRn96P1
Is1GGb7PUpzOyYZsfrnbJM0PhoPetNl2YngrSV+I3gqmlVGVHTPVxoHosC9AlOA4iH6kTYGwV9pT
A8WvFCF0kjquxmpuWT0gvsD783Z6PNeqAre+gsPO3Uvj3umrm279TOemkubnSrf/AxlkiM4FmqdZ
lkxR9FygyXROUuwnzT87YpCfwcZmkGdQMCMLkqS9Po6H49NpYz9y9WZOkWsEowFi+NGgR5iMIMsA
0esSlPDTD/vWL2EjYOq21NJhT27+c/3N8F9d/QYAAP//AwBQSwMEFAAGAAgAAAAhAKomDr68AAAA
IQEAAB0AAABkcnMvX3JlbHMvcGljdHVyZXhtbC54bWwucmVsc4SPQWrDMBBF94XcQcw+lp1FKMWy
N6HgbUgOMEhjWcQaCUkt9e0jyCaBQJfzP/89ph///Cp+KWUXWEHXtCCIdTCOrYLr5Xv/CSIXZINr
YFKwUYZx2H30Z1qx1FFeXMyiUjgrWEqJX1JmvZDH3IRIXJs5JI+lnsnKiPqGluShbY8yPTNgeGGK
yShIk+lAXLZYzf+zwzw7TaegfzxxeaOQzld3BWKyVBR4Mg4fYddEtiCHXr48NtwBAAD//wMAUEsD
BBQABgAIAAAAIQCRqkMxFAEAAIoBAAAPAAAAZHJzL2Rvd25yZXYueG1sbJBfS8MwFMXfBb9DuIJv
Lm23tltdOoYoqIiyKeJjbNI/rElKkq6dn950TgriW+45+Z17kuWqFzXac20qJQn4Ew8Ql5lilSwI
vL3eXc0BGUslo7WSnMCBG1il52dLmjDVyQ3fb22BXIg0CSVQWtskGJus5IKaiWq4dF6utKDWjbrA
TNPOhYsaB54XYUEr6TaUtOE3Jc9221YQeHp8eG9vjZHdocX78mXOPj92lpDLi359Dcjy3o6XT/Q9
c/Vde/cWd4DUFezrtcxKpVG+4ab6cu1/9FwrgbTqCAQBoEzVgzEIz3luuCUwi6MgPDq/SuzPpnEI
eIi16gRH/8KL8A/rTxdeFHoDjMdSx2H8wvQbAAD//wMAUEsDBAoAAAAAAAAAIQC/1xkB3HEAANxx
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
AA==
">
   <v:imagedata src="kwitansi_files/Format+KWITANSI%20-%20Copy_19050_image001.png"
    o:title=""/>
   <x:ClientData ObjectType="Pict">
    <x:SizeWithCells/>
    <x:CF>Bitmap</x:CF>
    <x:AutoPict/>
   </x:ClientData>
  </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:2;margin-left:75px;margin-top:5px;width:71px;
  height:65px'><img width=71 height=65
  src="kwitansi_files/Format+KWITANSI%20-%20Copy_19050_image002.png" v:shapes="Picture_x0020_9"></span><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=8 class=xl6519050 width=153 style='height:6.0pt;width:115pt'></td>
   </tr>
  </table>
  </span></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6919050 style='height:15.0pt'>&nbsp;</td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl6919050 style='height:15.75pt'>&nbsp;</td>
  <td class=xl6519050></td>
  <td class=xl6519050 colspan=7>YAYASAN PENDIDIKAN DAN SOSIAL ISLAM TIARA
  AKSARA</td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6919050 style='height:15.0pt'>&nbsp;</td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=32 style='mso-height-source:userset;height:24.0pt'>
  <td height=32 class=xl6919050 style='height:24.0pt'>&nbsp;</td>
  <td class=xl6519050>Untuk pembayaran<span style='mso-spacerun:yes'>�</span></td>
  <td class=xl6519050 colspan=6>: <font class="font519050">Biaya bangunan,
  biaya SPP, biaya seragam, BPP</font></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6919050 style='height:7.5pt'>&nbsp;</td>
  <td class=xl6519050></td>
  <td align=left valign=top><!--[if gte vml 1]><v:shape id="Parallelogram_x0020_4"
   o:spid="_x0000_s1193" type="#_x0000_t75" style='position:absolute;
   margin-left:9.75pt;margin-top:2.25pt;width:143.25pt;height:27.75pt;
   z-index:1;visibility:visible;mso-wrap-style:square;v-text-anchor:top'
   o:gfxdata="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
BgAAAAAEAAQA9QAAAO8FAAAAAA==
" o:insetmode="auto">
   <v:imagedata src="kwitansi_files/Format+KWITANSI%20-%20Copy_19050_image003.png"
    o:title=""/>
   <o:lock v:ext="edit" aspectratio="f"/>
   <x:ClientData ObjectType="Pict">
    <x:SizeWithCells/>
    <x:CF>Bitmap</x:CF>
    <x:AutoPict/>
   </x:ClientData>
  </v:shape><![endif]--><![if !vml]><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=10 class=xl6519050 width=66 style='height:7.5pt;width:50pt'></td>
   </tr>
  </table>
  </span></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6919050 style='height:15.0pt'>&nbsp;</td>
  <td class=xl6519050>JUMLAH<span style='mso-spacerun:yes'>�</span></td>
  <td class=xl6519050>:<span style='mso-spacerun:yes'>�</span><?php echo $r["total"]; ?></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050 colspan=2><span style='mso-spacerun:yes'></span></td>
  <td class=xl7019050></td>
 </tr>

 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6919050 style='height:15.0pt'>&nbsp;</td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6919050 style='height:7.5pt'>&nbsp;</td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6919050 style='height:15.0pt'>&nbsp;</td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050 colspan=2>Tangerang, <?php echo $today?></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6919050 style='height:15.0pt'>&nbsp;</td>
  <td class=xl6519050>Bendahara</td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050>Penyetor<span style='mso-spacerun:yes'>�</span></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl6919050 style='height:12.0pt'>&nbsp;</td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050 colspan=2></td>
  <td class=xl6519050></td>
  <td class=xl6519050 colspan=2></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl6919050 style='height:12.0pt'>&nbsp;</td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl6919050 style='height:12.0pt'>&nbsp;</td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl6919050 style='height:12.0pt'>&nbsp;</td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6919050 style='height:15.0pt'>&nbsp;</td>
  <td class=xl7119050 colspan=2>___________________</td>
  <td class=xl6519050></td>
  <td class=xl7119050 colspan=3>(����������)</td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl7019050>&nbsp;</td>
 </tr>
 <tr height=8 style='mso-height-source:userset;height:6.0pt'>
  <td height=8 class=xl7219050 style='height:6.0pt'>&nbsp;</td>
  <td class=xl7319050>&nbsp;</td>
  <td class=xl7319050>&nbsp;</td>
  <td class=xl7319050>&nbsp;</td>
  <td class=xl7319050>&nbsp;</td>
  <td class=xl7319050>&nbsp;</td>
  <td class=xl7319050>&nbsp;</td>
  <td class=xl7319050>&nbsp;</td>
  <td class=xl7319050>&nbsp;</td>
  <td class=xl7419050>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl6519050 style='height:9.75pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=12 style='mso-height-source:userset;height:9.0pt'>
  <td height=12 class=xl6519050 style='height:9.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6519050 style='height:7.5pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td height=36 class=xl6519050 style='height:27.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6519050 style='height:7.5pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6519050 style='height:7.5pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl6519050 style='height:12.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl6519050 style='height:12.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl6519050 style='height:12.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl6519050 style='height:12.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=8 style='mso-height-source:userset;height:6.0pt'>
  <td height=8 class=xl6519050 style='height:6.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl6519050 style='height:9.75pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl6519050 style='height:15.0pt'></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
  <td class=xl6519050></td>
 </tr>

 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=14 style='width:11pt'></td>
  <td width=153 style='width:115pt'></td>
  <td width=66 style='width:50pt'></td>
  <td width=33 style='width:25pt'></td>
  <td width=80 style='width:60pt'></td>
  <td width=80 style='width:60pt'></td>
  <td width=47 style='width:35pt'></td>
  <td width=80 style='width:60pt'></td>
  <td width=103 style='width:77pt'></td>
  <td width=22 style='width:17pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>

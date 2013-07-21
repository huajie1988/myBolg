<?php
/*
==========================================================
	微博show生成类(v0.01 2013.03.31)
	暂时只支持新浪微博
	可以通过修改不同参数调整微博show的标题，颜色等内容
==========================================================
	添加构造函数默认初始化参数为空数组(v0.02 2013.04.10)
	本想添加setColor()默认参数为空数组，但觉得没实际意义
	于是放弃>_<
==========================================================
 */
class weibo{
	private $width=350; //宽度,初始化传空值，则width=100%
	private $height=550; //高度
	private $language="zh_cn"; //语言，只有zh_cn和zh_tw
	private $fansRow=2; //粉丝显示行数
	private $ptype=1; //是否显示微博中的图片，0不显示
	private $speed=0; //微博滚动速度，300最慢，100中间,50最快，0不动
	private $skin=1; //默认皮肤编号,11为自定义配色
	private $isTitle=1; //是否显示标题栏,0不显示
	private $noborder=1; //是否显示边框，0不显示
	private $isweibo=1; //是否显示微博内容，0不显示
	private $isfans=1; //显示粉丝，0不显示
	private $uid=3107316873; //微博帐号id
	private $verifier="3f2fb334";//微博帐号验证,更改uid后必需同时做相应修改，值与uid有关，但暂时关系不明。2013.03.31
	private $titleColor="d6f3f7"; //标题栏颜色
	private $bgColor="ffffff"; //背景色
	private $fontColor="666666"; //字体颜色
	private $linkColor="0082cb"; //链接颜色
	private $hoverColor="ecfbfd"; //鼠标悬停后背景色
	private $str=""; //最后返回的字符串
	//private $errorStr=""; //返回错误信息

	/*public function __construct(){
		//$this->errorStr="构造错误";
		$this->getWeiboStr();
	}*/
	public function __construct($weiboStrArr=Array()){
		if(!is_array($weiboStrArr)){
			$this->errorStr="传递的参数不为数组";
			//echo $this->errorStr;
			$this->str="传递的参数不为字符串";
			return;
		}
		foreach($weiboStrArr as $key=>$value){
			if(isset($this->$key)){
				$this->$key=$value;
			}
		}
		$this->getWeiboStr();
	}
	private function getWeiboStr(){
		if(!$this->width){
			$this->str='<iframe width="100%"';
			//echo '<pre>'.$this->str.'</pre>';
		}
		else{
			$this->str='<iframe width="'.$this->width.'"';
			//echo $this->str;
		}
		//echo '<pre>'.$this->str.'</pre>';
		$this->str=$this->str.' height="'.$this->height.'"'.' class="'.'share_self'.'"'.' frameborder='.'"'.'0'.'"'.' scrolling='.'"'.'no'.'"'.' src='.'"http://widget.weibo.com/weiboshow/index.php?language=';
		//echo '<pre>'.$this->str.'</pre>';
		$this->str.=$this->language.'&width='.$this->width.'&height='.$this->height.'&fansRow='.$this->fansRow.'&ptype='.$this->ptype.'&speed='.$this->speed;
		//echo '<pre>'.$this->str.'</pre>';
		$this->str.='&skin='.$this->skin.'&isTitle='.$this->isTitle.'&noborder='.$this->noborder.'&isWeibo='.$this->isweibo.'&isFans='.$this->isfans.'&uid='.$this->uid;
		//echo '<pre>'.$this->str.'</pre>';
		if(($this->skin)>10){
			$this->str.='&verifier='.$this->verifier.'&colors='.$this->titleColor.','.$this->bgColor.','.$this->fontColor.','.$this->linkColor.','.$this->hoverColor.'&dpc=1'.'">'.'</iframe>';}
		else{
			$this->str.='&verifier='.$this->verifier.'&dpc=1'.'">'.'</iframe>';
		}
	}
	public function setWidth($width){
		$this->width=$width;
		$this->getWeiboStr();
	}
	public function setHeight($Height){
		$this->height=$Height;
		$this->getWeiboStr();
	}
	public function setLanguage($language){
		$this->language=$language;
		$this->getWeiboStr();
	}
	public function setFansRow($fansRow){
		$this->fansRow=$fansRow;
		$this->getWeiboStr();
	}
	public function setPtype($ptype){
		$this->ptype=$ptype;
		$this->getWeiboStr();
	}
	public function setSpeed($speed){
		$this->speed=$speed;
		$this->getWeiboStr();
	}
	public function setSkin($skin){
		$this->skin=$skin;
		$this->getWeiboStr();
	}
	public function setIsTitle($isTitle){
		$this->isTitle=$isTitle;
		$this->getWeiboStr();
	}
	public function setNoBorder($noborder){
		$this->noborder=$noborder;
		$this->getWeiboStr();
	}
	public function setIsWeibo($isweibo){
		$this->isweibo=$isweibo;
		$this->getWeiboStr();
	}
	public function setIsFans($isfans){
		$this->isfans=$isfans;
		$this->getWeiboStr();
	}
	public function setUidAndVerifier($uid,$verifier=''){
		$this->uid=$uid;
		$this->verifier=$verifier;
		$this->getWeiboStr();
	}
	public function setTitleColor($titleColor){
		$this->titleColor=$titleColor;
		$this->skin=11;
		$this->getWeiboStr();
	}
	public function setBgColor($bgColor){
		$this->bgColor=$bgColor;
		$this->skin=11;
		$this->getWeiboStr();
	}
	public function setFontColor($fontColor){
		$this->fontColor=$fontColor;
		$this->skin=11;
		$this->getWeiboStr();
	}
	public function setLinkColor($linkColor){
		$this->linkColor=$linkColor;
		$this->skin=11;
		$this->getWeiboStr();
	}
	public function setHoverColor($hoverColor){
		$this->hoverColor=$hoverColor;
		$this->skin=11;
		$this->getWeiboStr();
	}

	public function getWidth(){
		return $this->width;
	}
	public function getHeight(){
		return $this->height;
	}
	public function getLanguage(){
		return $this->language;
	}
	public function getFansRow(){
		return $this->fansRow;
	}
	public function getPtype(){
		return $this->ptype;
	}
	public function getSpeed(){
		return $this->speed;
	}
	public function getSkin(){
		return $this->skin;
	}
	public function getIsTitle(){
		return $this->isTitle;
	}
	public function getNoBorder(){
		return $this->noborder;
	}
	public function getIsWeibo(){
		return $this->isweibo;
	}
	public function getIsFans(){
		return $this->isfans;
	}
	public function getUid(){
		return $this->uid;
	}
		public function getVerifier(){
		return $this->verifier;
	}
	public function getTitleColor(){
		if(($this->skin)>10)
			return $this->titleColor;
		else
			return "你选用的是非自定义皮肤，没有该属性";
	}
	public function getBgColor(){
		if(($this->skin)>10)
			return $this->bgColor;
		else
			return "你选用的是非自定义皮肤，没有该属性";
	}
	public function getFontColor(){
		if(($this->skin)>10)
			return $this->fontColor;
		else
			return "你选用的是非自定义皮肤，没有该属性";
	}
	public function getLinkColor(){
		if(($this->skin)>10)
			return $this->linkColor;
		else
			return "你选用的是非自定义皮肤，没有该属性";
	}
	public function getHoverColor(){
		if(($this->skin)>10)
			return $this->hoverColor;
		else
			return "你选用的是非自定义皮肤，没有该属性";
	}

	public function setColor($colorArr){
		/*
		$this->setTitleColor($titleColor);
		$this->setBgColor($bgColor);
		$this->setFontColor($fontColor);
		$this->setLinkColor($linkColor);
		$this->setHoverColor($hoverColor);
		 */
		foreach($colorArr as $key=>$value){
			if(isset($this->$key)){
				$this->$key=$value;
			}
		}
		$this->skin=11;
		$this->getWeiboStr();
	}
	public function Display(){
		echo $this->str;
	}
}
//$arr=array('titleColor'=>"00ff00",'skin'=>10,/*'uid'=>1401880315,'verifier'=>'f47cc89f'*/);
//$wb=new weibo($arr);
//$arrcolor=array('bgColor'=>'ff5500');
//$wb->setSkin(7);
//$wb->setColor($arrcolor);
//$wb->setUidAndVerifier("1401880315","f47cc89f");
//$wb->display();
//echo $wb->getBgColor();
?>

<?php
class Demo{
    const net = 'victorg.club';
    const webName = '我的网站';
    const www = <<<'www'
    <a href="victorg.club">victor的站点</a>
www;
    public function showInfo(){
        return self::net.'==='.self::webName;
    }
}
echo Demo::net.Demo::www;
echo (new Demo)->showInfo();

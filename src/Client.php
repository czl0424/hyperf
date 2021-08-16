<?php
declare(strict_types=1);

namespace TopdrinkHyperf\Apollo;


use Symfony\Component\Yaml\Yaml;

class Client
{
    /**
     * Notes:生成yml文件
     * User: ryan
     * DateTime: 2021/8/16 14:23
     * @param array $array
     */
    public function createYmlFile(array $array){
        foreach ($array as $key=>$value){
            $yaml = Yaml::dump($value);
            file_put_contents('./'.$key.'.yaml',$yaml);
        }
    }
}
<?php

namespace Gitipasand\IranProvinceInfo;


class IranProvinceInfo
{
    /**
     * @var string
     */
    private $file;

    private function getFile(){

        $path = storage_path() . "/gitipasand/province/".$this->file.".json";
        $json = json_decode(file_get_contents($path), true);

        return $json;
    }
    /**
     * @return Province[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getProvinces()
    {
        $this->file = "province";
        return $this->getFile();
    }

    /**
     * @return City[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getCities()
    {
        $this->file = "city";
        return $this->getFile();
    }

    /**
     * @param $province_id
     * @return mixed
     */
    public function getProvinceCities($province_id)
    {
        $cities = [];
        $result = $this->getCities();

        foreach ($result as $key=> $record){
            if($record['province_id'] == $province_id){
                $cities[$key] = $record['title'];
            }
        }

        return $cities;
    }
}

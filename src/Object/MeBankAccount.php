<?php
namespace PhitFlyer\Object;


class MeBankAccount
{
    /** @var integer  */
    private $id;
    
    /** @var boolean  */
    private $is_verified;
    
    /** @var string  */
    private $bank_name;
    
    /** @var string  */
    private $branch_name;
    
    /** @var string  */
    private $account_type;
    
    /** @var string  */
    private $account_number;
    
    /** @var string  */
    private $account_name;
    
    /**
     * construct
     *
     * @param integer $id
     * @param boolean $is_verified
     * @param string $bank_name
     * @param string $branch_name
     * @param string $account_type
     * @param string $account_number
     * @param string $account_name
     */
    public function __construct($id, $is_verified, $bank_name, $branch_name, $account_type, $account_number, $account_name){
        $this->id = $id;
        $this->is_verified = $is_verified;
        $this->bank_name = $bank_name;
        $this->branch_name = $branch_name;
        $this->account_type = $account_type;
        $this->account_number = $account_number;
        $this->account_name = $account_name;
    }
    
    /**
     * construct from stdObject
     *
     * @param object $obj
     *
     * @return MeBankAccount
     */
    public static function fromObject($obj){
        return new self(
            property_exists($obj,'id') ? $obj->id : null,
            property_exists($obj,'is_verified') ? $obj->is_verified : null,
            property_exists($obj,'bank_name') ? $obj->bank_name : null,
            property_exists($obj,'branch_name') ? $obj->branch_name : null,
            property_exists($obj,'account_type') ? $obj->account_type : null,
            property_exists($obj,'account_number') ? $obj->account_number : null,
            property_exists($obj,'account_name') ? $obj->account_name : null
        );
    }
    
    /**
     * get id
     *
     * @return integer
     */
    public function getId(){
        return $this->id;
    }
    
    /**
     * is verified
     *
     * @return boolean
     */
    public function getIsVerified(){
        return $this->is_verified;
    }
    
    /**
     * get bank name
     *
     * @return string
     */
    public function getBankName(){
        return $this->bank_name;
    }
    
    /**
     * get branch name
     *
     * @return string
     */
    public function getBranchName(){
        return $this->branch_name;
    }
    
    /**
     * get account type
     *
     * @return string
     */
    public function getAccountType(){
        return $this->account_type;
    }
    
    /**
     * get account number
     *
     * @return string
     */
    public function getAccountNumber(){
        return $this->account_number;
    }
    
    /**
     * get account name
     *
     * @return string
     */
    public function getAccountName(){
        return $this->account_name;
    }
    
}
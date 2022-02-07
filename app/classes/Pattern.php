<?php
namespace App\classes;
class Pattern
{
    protected $length;
    protected $i;
    protected $j;
    protected $k;
    protected $l;
    protected $result;

    public function __construct($data)
    {
        $this->length = $data['input_length'];
    }
    public function index()
    {
        for ($this->i = 1; $this->i <= $this->length; $this->i++)
        {
            for ($this->j = 1; $this->j <= (2 * $this->length) -1; $this->j++)
            {
                if (($this->j >= $this->length - ($this->i -1)) && ($this->j <= $this->length + ($this->i -1)))
            {
                $this->result .= '*';
            }else {
                    $this->result .= '&nbsp;&nbsp;';
                }
            }
            $this->result .= '<br/>';
        }
        for ($this->k = $this->length - 1; $this->k >= 1; $this->k--)
        {
            for ($this->l = 1; $this->l <= (2 * $this->length) -1; $this->l++)
            {
                if (($this->l >= $this->length - ($this->k -1)) && ($this->l <= $this->length + ($this->k -1)))
                {
                    $this->result .= '*';
                }else {
                    $this->result .= '&nbsp;&nbsp;';
                }
            }
            $this->result .= '<br/>';
        }
        return $this->result;
    }
}
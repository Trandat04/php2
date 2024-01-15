<?php
class SinhVien
{
    public function __construct(
        public int $id,
        public string $code,
        public string $name,
        public DateTime $dob
    ) {
    }

    public function toString()
    {
        return $this->id . ' '
            . $this->code . ' '
            . $this->name . ' '
            . $this->dob->format('d-m-Y');
    }
}
echo "<pre>";
$sinhVien1 = new SinhVien(1, 'PH39258', 'Tran Cong Dat', new DateTime('2004-04-16'));

$sinhVien2 = new SinhVien(2, 'PH39999', 'Tran Cong D', new DateTime('2004-03-15'));

echo $sinhVien1->toString() . PHP_EOL;
echo $sinhVien2->toString() . PHP_EOL;

print_r($sinhVien2);

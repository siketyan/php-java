<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _Double implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $HighBytes = null;
    private $LowBytes = null;
    public function execute(): void
    {
        $this->HighBytes = $this->readUnsignedInt();
        $this->LowBytes = $this->readUnsignedInt();
    }
    public function getBytes()
    {
        return ($this->HighBytes << 32) + $this->LowBytes;
    }
}

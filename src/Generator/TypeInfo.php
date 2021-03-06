<?php declare(strict_types=1);

namespace GW\DQO\Generator;

final class TypeInfo
{
    private bool $isClass;
    private string $phpType;
    private bool $allowsNull;

    public function __construct(bool $isClass, string $phpType, bool $allowsNull)
    {
        $this->isClass = $isClass;
        $this->phpType = $phpType;
        $this->allowsNull = $allowsNull;
    }

    public function isClass(): bool
    {
        return $this->isClass;
    }

    public function phpType(): string
    {
        return $this->phpType;
    }

    public function allowsNull(): bool
    {
        return $this->allowsNull;
    }
}

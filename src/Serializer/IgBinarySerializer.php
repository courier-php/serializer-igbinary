<?php
declare(strict_types = 1);

namespace Courier\Serializer;

final class IgBinarySerializer implements SerializerInterface {
  public function getContentType(): string {
    return 'application/vnd.courier+igbinary-serialized';
  }

  public function getContentEncoding(): string {
    return 'binary';
  }

  public function serialize(array $array): string {
    return igbinary_serialize($array);
  }

  public function unserialize(string $data): array {
    return igbinary_unserialize($data);
  }
}

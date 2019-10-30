
/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Storage\Serializer;

use InvalidArgumentException;

class Json extends AbstractSerializer
{
	/**
	 * Serializes data
	 */
	public function serialize() -> string
	{
	    if typeof this->data == "object" {
            throw new InvalidArgumentException(
                "Data for JSON serializer cannot be of type object"
            );
        }

        if !this->isSerializable(this->data) {
            return this->data;
        }

		return json_encode(this->data);
	}

	/**
	 * Unserializes data
	 */
	public function unserialize(var data) -> void
	{
		let this->data = json_decode(data);
	}
}

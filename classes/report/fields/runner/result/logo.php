<?php

namespace mageekguy\atoum\report\fields\runner\result;

use
	mageekguy\atoum,
	mageekguy\atoum\report,
	mageekguy\atoum\cli\prompt,
	mageekguy\atoum\cli\colorizer
;

class logo extends cli
{
	public function __toString()
	{
        if ($this->failNumber === 0 && $this->errorNumber === 0 && $this->exceptionNumber === 0 && $this->uncompletedMethodNumber === 0)
        {
            return "
            \033[0m  \033[48;5;16m  \033[0m                                 \033[48;5;16m  \033[0m \033[0m
            \033[48;5;16m    \033[0m                                 \033[48;5;16m   \033[0m
            \033[48;5;16m  \033[48;5;231m \033[48;5;120m \033[48;5;16m  \033[0m                             \033[48;5;16m  \033[48;5;120m \033[48;5;231m \033[48;5;16m \033[0m
            \033[48;5;16m  \033[48;5;231m \033[48;5;120m   \033[48;5;16m                             \033[48;5;120m   \033[48;5;231m \033[48;5;16m \033[0m
            \033[48;5;16m  \033[48;5;231m \033[48;5;120m            \033[48;5;16m  \033[48;5;157m       \033[48;5;16m  \033[48;5;120m            \033[48;5;231m \033[48;5;16m \033[0m
	    \033[48;5;16m  \033[48;5;34m           \033[48;5;16m  \033[48;5;157m \033[48;5;120m         \033[48;5;157m \033[48;5;16m  \033[48;5;34m           \033[48;5;16m \033[0m
            \033[0m  \033[48;5;16m           \033[48;5;157m \033[48;5;120m             \033[48;5;157m \033[48;5;16m           \033[0m \033[0m
            \033[0m           \033[48;5;16m  \033[48;5;157m \033[48;5;120m             \033[48;5;157m \033[48;5;16m  \033[0m          \033[0m
            \033[0m          \033[48;5;16m   \033[48;5;157m \033[48;5;120m   \033[48;5;16m  \033[48;5;120m   \033[48;5;16m  \033[48;5;120m   \033[48;5;157m \033[48;5;16m   \033[0m         \033[0m
            \033[0m        \033[48;5;16m  \033[48;5;83m \033[48;5;16m  \033[48;5;157m \033[48;5;120m   \033[48;5;16m  \033[48;5;120m   \033[48;5;16m  \033[48;5;120m   \033[48;5;157m \033[48;5;16m  \033[48;5;83m \033[48;5;16m  \033[0m       \033[0m
            \033[0m        \033[48;5;16m     \033[48;5;157m \033[48;5;120m             \033[48;5;157m \033[48;5;16m     \033[0m       \033[0m
            \033[0m           \033[48;5;16m    \033[48;5;157m \033[48;5;120m         \033[48;5;157m \033[48;5;16m    \033[0m          \033[0m
            \033[0m             \033[48;5;16m  \033[48;5;157m \033[48;5;120m         \033[48;5;157m \033[48;5;16m  \033[0m            \033[0m
            \033[0m             \033[48;5;16m  \033[48;5;83m           \033[48;5;16m  \033[0m            \033[0m
            \033[0m             \033[48;5;16m  \033[48;5;83m  \033[48;5;16m   \033[48;5;83m \033[48;5;16m   \033[48;5;83m  \033[48;5;16m  \033[0m            \033[0m
            \033[0m               \033[48;5;16m  \033[48;5;83m       \033[48;5;16m  \033[0m      \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m
            \033[0m                 \033[48;5;16m       \033[0m                \033[0m
            \033[0m" . PHP_EOL;
        }
        else
        {
            return "
            \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[0m \033[0m
            \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[0m
            \033[48;5;16m \033[48;5;16m \033[48;5;231m \033[48;5;211m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;211m \033[48;5;231m \033[48;5;16m \033[0m
            \033[48;5;16m \033[48;5;16m \033[48;5;231m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;231m \033[48;5;16m \033[0m
            \033[48;5;16m \033[48;5;16m \033[48;5;231m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;16m \033[48;5;16m \033[48;5;218m \033[48;5;218m \033[48;5;218m \033[48;5;218m \033[48;5;218m \033[48;5;218m \033[48;5;218m \033[48;5;16m \033[48;5;16m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;211m \033[48;5;231m \033[48;5;16m \033[0m
            \033[48;5;16m \033[48;5;16m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;16m \033[48;5;16m \033[48;5;218m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;218m \033[48;5;16m \033[48;5;16m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;124m \033[48;5;16m \033[0m
            \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;218m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;218m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[0m \033[0m
            \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;218m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;218m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m
            \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;218m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;16m \033[48;5;16m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;16m \033[48;5;16m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;218m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m
            \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;197m \033[48;5;16m \033[48;5;16m \033[48;5;218m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;16m \033[48;5;16m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;16m \033[48;5;16m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;218m \033[48;5;16m \033[48;5;16m \033[48;5;197m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m
            \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;218m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;218m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m
            \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;218m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;218m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m
            \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;218m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;204m \033[48;5;218m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m
            \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m
            \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;197m \033[48;5;197m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;197m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;197m \033[48;5;197m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m
            \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;197m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m
            \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[48;5;16m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m \033[0m
            \033[0m" . PHP_EOL;
        }
	}
}

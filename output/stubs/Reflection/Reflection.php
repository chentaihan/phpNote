<?php
class ReflectionException extends Exception  {
}
class Reflection  {
	public static function getModifierNames ($modifiers) {}
	public static function export (Reflector $reflector, $return = false) {}
}
interface Reflector  {
	static function export ();
	function __toString ();
}
abstract class ReflectionFunctionAbstract implements Reflector {
	public $name;
	final private function __clone () {}
	abstract public function __toString ();
	public function inNamespace () {}
	public function isClosure () {}
	public function isDeprecated () {}
	public function isInternal () {}
	public function isUserDefined () {}
	public function getClosureThis () {}
	public function getClosureScopeClass () {}
	public function getDocComment () {}
	public function getEndLine () {}
	public function getExtension () {}
	public function getExtensionName () {}
	public function getFileName () {}
	public function getName () {}
	public function getNamespaceName () {}
	public function getNumberOfParameters () {}
	public function getNumberOfRequiredParameters () {}
	public function getParameters () {}
	public function getReturnType () {}
	public function getShortName () {}
	public function getStartLine () {}
	public function getStaticVariables () {}
	public function hasReturnType () {}
	public function returnsReference () {}
	public function isGenerator() {}
	public function isVariadic() {}
}
class ReflectionFunction extends ReflectionFunctionAbstract implements Reflector {
	const IS_DEPRECATED = 262144;
	public $name;
	public function __construct ($name) {}
	public function __toString () {}
	public static function export ($name, $return = null) {}
	public function isDisabled () {}
	public function invoke ($args = null) {}
	public function invokeArgs (array $args) {}
	public function getClosure () {}
}
class ReflectionParameter implements Reflector {
	public $name;
	final private function __clone () {}
	public static function export ($function, $parameter, $return = null) {}
	public function __construct ($function, $parameter) {}
	public function __toString () {}
	public function getName () {}
	public function getType() {}
	public function hasType () {}
	public function isPassedByReference () {}
	public function canBePassedByValue () {}
	public function getDeclaringFunction () {}
	public function getDeclaringClass () {}
	public function getClass () {}
	public function isArray () {}
    public function isCallable () {}
	public function allowsNull () {}
	public function getPosition () {}
	public function isOptional () {}
	public function isDefaultValueAvailable () {}
	public function getDefaultValue () {}
    public function isDefaultValueConstant () {}
	public function getDefaultValueConstantName () {}
	public function isVariadic() {}
}
class ReflectionMethod extends ReflectionFunctionAbstract implements Reflector {
	const IS_STATIC = 1;
	const IS_PUBLIC = 256;
	const IS_PROTECTED = 512;
	const IS_PRIVATE = 1024;
	const IS_ABSTRACT = 2;
	const IS_FINAL = 4;
	public $name;
	public $class;
	public static function export ($class, $name, $return = false) {}
	public function __construct ($class, $name) {}
	public function __toString () {}
	public function isPublic () {}
	public function isPrivate () {}
	public function isProtected () {}
	public function isAbstract () {}
	public function isFinal () {}
	public function isStatic () {}
	public function isConstructor () {}
	public function isDestructor () {}
	public function getClosure ($object) {}
	public function getModifiers () {}
	public function invoke ($object, $parameter = null, $_ = null) {}
	public function invokeArgs ($object, array $args) {}
	public function getDeclaringClass () {}
	public function getPrototype () {}
	public function setAccessible ($accessible) {}
}
class ReflectionClass implements Reflector {
	const IS_IMPLICIT_ABSTRACT = 16;
	const IS_EXPLICIT_ABSTRACT = 32;
	const IS_FINAL = 64;
	public $name;
	final private function __clone () {}
	public static function export ($argument, $return = false) {}
	public function __construct ($argument) {}
	public function __toString () {}
	public function getName () {}
	public function isInternal () {}
	public function isUserDefined () {}
	public function isInstantiable () {}
	public function isCloneable () {}
	public function getFileName () {}
	public function getStartLine () {}
	public function getEndLine () {}
	public function getDocComment () {}
	public function getConstructor () {}
	public function hasMethod ($name) {}
	public function getMethod ($name) {}
	public function getMethods ($filter = null) {}
	public function hasProperty ($name) {}
	public function getProperty ($name) {}
	public function getProperties ($filter = null) {}
	public function hasConstant ($name) {}
	public function getConstants () {}
	public function getConstant ($name) {}
	public function getInterfaces () {}
	public function getInterfaceNames () {}
	public function isAnonymous () {}
	public function isInterface () {}
	public function getTraits () {}
	public function getTraitNames () {}
	public function getTraitAliases () {}
	public function isTrait () {}
	public function isAbstract () {}
	public function isFinal () {}
	public function getModifiers () {}
	public function isInstance ($object) {}
	public function newInstance ($args = null, $_ = null) {}
	public function newInstanceWithoutConstructor() {}
	public function newInstanceArgs (array $args = null) {}
	public function getParentClass () {}
	public function isSubclassOf ($class) {}
	public function getStaticProperties () {}
	public function getStaticPropertyValue ($name, $default = null) {}
	public function setStaticPropertyValue ($name, $value) {}
	public function getDefaultProperties () {}
	public function isIterateable () {}
	public function implementsInterface ($interface) {}
	public function getExtension () {}
	public function getExtensionName () {}
	public function inNamespace () {}
	public function getNamespaceName () {}
	public function getShortName () {}
}
class ReflectionObject extends ReflectionClass implements Reflector {
	public static function export ($argument, $return = null) {}
	public function __construct ($argument) {}
}
class ReflectionProperty implements Reflector {
	const IS_STATIC = 1;
	const IS_PUBLIC = 256;
	const IS_PROTECTED = 512;
	const IS_PRIVATE = 1024;
	public $name;
	public $class;
	final private function __clone () {}
	public static function export ($class, $name, $return = null) {}
	public function __construct ($class, $name) {}
	public function __toString () {}
	public function getName () {}
	public function getValue ($object) {}
	public function setValue ($object, $value) {}
	public function setValue ($value) {}
	public function isPublic () {}
	public function isPrivate () {}
	public function isProtected () {}
	public function isStatic () {}
	public function isDefault () {}
	public function getModifiers () {}
	public function getDeclaringClass () {}
	public function getDocComment () {}
	public function setAccessible ($accessible) {}
}
class ReflectionExtension implements Reflector {
	public $name;
	final private function __clone () {}
	public static function export ($name, $return = false) {}
	public function __construct ($name) {}
	public function __toString () {}
	public function getName () {}
	public function getVersion () {}
	public function getFunctions () {}
	public function getConstants () {}
	public function getINIEntries () {}
	public function getClasses () {}
	public function getClassNames () {}
	public function getDependencies () {}
	public function info () {}
	public function isPersistent () {}
	public function isTemporary () {}
}
class ReflectionZendExtension implements Reflector {
	public $name;
	final private function __clone () {}
	public static function export ($name, $return = null) {}
	public function __construct ($name) {}
	public function __toString () {}
	public function getName () {}
	public function getVersion () {}
	public function getAuthor () {}
	public function getURL () {}
	public function getCopyright () {}
}
class ReflectionGenerator
{
	public function __construct(Generator $generator)
	{
	}
	public function getExecutingFile()
	{
	}
	public function getExecutingGenerator()
	{
	}
	public function getExecutingLine()
	{
	}
	public function getFunction()
	{
	}
	public function getThis()
	{
	}
	public function getTrace($options = DEBUG_BACKTRACE_PROVIDE_OBJECT)
	{
	}
}
class ReflectionType
{
	public function allowsNull()
	{
	}
	public function isBuiltin()
	{
	}
	public function __toString()
	{
	}
}
?>

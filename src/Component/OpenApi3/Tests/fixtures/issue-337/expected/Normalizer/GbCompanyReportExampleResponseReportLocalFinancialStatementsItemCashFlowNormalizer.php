<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('netCashFlowFromOperations', $data)) {
            $object->setNetCashFlowFromOperations($data['netCashFlowFromOperations']);
        }
        if (\array_key_exists('netCashFlowBeforeFinancing', $data)) {
            $object->setNetCashFlowBeforeFinancing($data['netCashFlowBeforeFinancing']);
        }
        if (\array_key_exists('netCashFlowFromFinancing', $data)) {
            $object->setNetCashFlowFromFinancing($data['netCashFlowFromFinancing']);
        }
        if (\array_key_exists('increaseInCash', $data)) {
            $object->setIncreaseInCash($data['increaseInCash']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNetCashFlowFromOperations()) {
            $data['netCashFlowFromOperations'] = $object->getNetCashFlowFromOperations();
        }
        if (null !== $object->getNetCashFlowBeforeFinancing()) {
            $data['netCashFlowBeforeFinancing'] = $object->getNetCashFlowBeforeFinancing();
        }
        if (null !== $object->getNetCashFlowFromFinancing()) {
            $data['netCashFlowFromFinancing'] = $object->getNetCashFlowFromFinancing();
        }
        if (null !== $object->getIncreaseInCash()) {
            $data['increaseInCash'] = $object->getIncreaseInCash();
        }
        return $data;
    }
}
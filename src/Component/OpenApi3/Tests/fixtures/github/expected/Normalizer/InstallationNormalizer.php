<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InstallationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\Installation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Installation';
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
        $object = new \Github\Model\Installation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('account', $data) && $data['account'] !== null) {
            $object->setAccount($data['account']);
        }
        elseif (\array_key_exists('account', $data) && $data['account'] === null) {
            $object->setAccount(null);
        }
        if (\array_key_exists('repository_selection', $data)) {
            $object->setRepositorySelection($data['repository_selection']);
        }
        if (\array_key_exists('access_tokens_url', $data)) {
            $object->setAccessTokensUrl($data['access_tokens_url']);
        }
        if (\array_key_exists('repositories_url', $data)) {
            $object->setRepositoriesUrl($data['repositories_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('app_id', $data)) {
            $object->setAppId($data['app_id']);
        }
        if (\array_key_exists('target_id', $data)) {
            $object->setTargetId($data['target_id']);
        }
        if (\array_key_exists('target_type', $data)) {
            $object->setTargetType($data['target_type']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\InstallationPermissions', 'json', $context));
        }
        if (\array_key_exists('events', $data)) {
            $values = array();
            foreach ($data['events'] as $value) {
                $values[] = $value;
            }
            $object->setEvents($values);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('single_file_name', $data) && $data['single_file_name'] !== null) {
            $object->setSingleFileName($data['single_file_name']);
        }
        elseif (\array_key_exists('single_file_name', $data) && $data['single_file_name'] === null) {
            $object->setSingleFileName(null);
        }
        if (\array_key_exists('app_slug', $data)) {
            $object->setAppSlug($data['app_slug']);
        }
        if (\array_key_exists('suspended_by', $data) && $data['suspended_by'] !== null) {
            $object->setSuspendedBy($this->denormalizer->denormalize($data['suspended_by'], 'Github\\Model\\InstallationSuspendedBy', 'json', $context));
        }
        elseif (\array_key_exists('suspended_by', $data) && $data['suspended_by'] === null) {
            $object->setSuspendedBy(null);
        }
        if (\array_key_exists('suspended_at', $data) && $data['suspended_at'] !== null) {
            $object->setSuspendedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['suspended_at']));
        }
        elseif (\array_key_exists('suspended_at', $data) && $data['suspended_at'] === null) {
            $object->setSuspendedAt(null);
        }
        if (\array_key_exists('contact_email', $data) && $data['contact_email'] !== null) {
            $object->setContactEmail($data['contact_email']);
        }
        elseif (\array_key_exists('contact_email', $data) && $data['contact_email'] === null) {
            $object->setContactEmail(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['account'] = $object->getAccount();
        $data['repository_selection'] = $object->getRepositorySelection();
        $data['access_tokens_url'] = $object->getAccessTokensUrl();
        $data['repositories_url'] = $object->getRepositoriesUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['app_id'] = $object->getAppId();
        $data['target_id'] = $object->getTargetId();
        $data['target_type'] = $object->getTargetType();
        $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
        $values = array();
        foreach ($object->getEvents() as $value) {
            $values[] = $value;
        }
        $data['events'] = $values;
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $data['single_file_name'] = $object->getSingleFileName();
        $data['app_slug'] = $object->getAppSlug();
        if (null !== $object->getSuspendedBy()) {
            $data['suspended_by'] = $this->normalizer->normalize($object->getSuspendedBy(), 'json', $context);
        }
        if (null !== $object->getSuspendedAt()) {
            $data['suspended_at'] = $object->getSuspendedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getContactEmail()) {
            $data['contact_email'] = $object->getContactEmail();
        }
        return $data;
    }
}
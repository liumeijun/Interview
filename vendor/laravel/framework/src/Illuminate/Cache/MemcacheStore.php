<?php

use Memcache;

class MemcacheStore implements StoreInterface {

//构造函数的类型处：

    public function __construct(Memcache $memcache, $prefix = '')

    {

        $this->memcache = $memcache;

        $this->prefix = strlen($prefix) > 0 ? $prefix.':' : '';

    }

    /**

     * Retrieve an item from the cache by key.

     *

     * @param  string  $key

     * @return mixed

     */

    public function get($key)

    {

        return $this->memcache->get($this->prefix.$key);

    }
    /**

     * Store an item in the cache for a given number of minutes.

     *

     * @param  string  $key

     * @param  mixed   $value

     * @param  int     $minutes

     * @return void

     */

    public function put($key, $value, $minutes)

    {

        $compress = is_bool($value) || is_int($value) || is_float($value) ? false : MEMCACHE_COMPRESSED;

        $this->memcache->set($this->prefix.$key, $value, $compress, $minutes * 60);

    }

    /**
     * Store an item in the cache if the key doesn't exist.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @param  int     $minutes
     * @return bool
     */
    public function add($key, $value, $minutes)
    {
        return $this->memcached->add($this->prefix.$key, $value, $minutes * 60);
    }

    /**
     * Increment the value of an item in the cache.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @return int|bool
     */
    public function increment($key, $value = 1)
    {
        return $this->memcached->increment($this->prefix.$key, $value);
    }

    /**
     * Decrement the value of an item in the cache.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @return int|bool
     */
    public function decrement($key, $value = 1)
    {
        return $this->memcached->decrement($this->prefix.$key, $value);
    }

    /**
     * Store an item in the cache indefinitely.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @return void
     */
    public function forever($key, $value)
    {
        $this->put($key, $value, 0);
    }

    /**
     * Remove an item from the cache.
     *
     * @param  string  $key
     * @return bool
     */
    public function forget($key)
    {
        return $this->memcached->delete($this->prefix.$key);
    }

    /**
     * Remove all items from the cache.
     *
     * @return void
     */
    public function flush()
    {
        $this->memcached->flush();
    }

    /**
     * Get the underlying Memcached connection.
     *
     * @return \Memcached
     */
    public function getMemcached()
    {
        return $this->memcached;
    }

    /**
     * Get the cache key prefix.
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Set the cache key prefix.
     *
     * @param  string  $prefix
     * @return void
     */
    public function setPrefix($prefix)
    {
        $this->prefix = ! empty($prefix) ? $prefix.':' : '';
    }
}

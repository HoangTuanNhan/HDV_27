<?php
namespace api\swagger\swagger;
/**
 * @SWG\Swagger(
 *     schemes={"http"},
 *     host="localhost/HDV_27/",
 *     basePath="api/web/index.php",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Hoang Nhan",
 *         description="Version: __1.0.0__",
 *         @SWG\Contact(name = "hoangnhan", email = "hoangtuannhanbk@gmail.com")
 *     ),
 * )
 *
 * @SWG\Tag(
 *   name="user",
 *   description="用户相关操作",
 *   @SWG\ExternalDocumentation(
 *     description="Find out more about our store",
 *     url="http://swagger.io"
 *   )
 * )
 *
 * @SWG\SecurityScheme(
 *   securityDefinition="api_key",
 *   type="apiKey",
 *   in="query",
 *   name="access_token",
 *   description="the descripotion",
 *   flow = "accessCode"
 * )
 */
/**
 * @SWG\Definition(
 *   @SWG\Xml(name="##default")
 * )
 */
class ApiResponse
{
    /**
     * @SWG\Property(format="int32", description = "code of result")
     * @var int
     */
    public $code;
    /**
     * @SWG\Property
     * @var string
     */
    public $type;
    /**
     * @SWG\Property
     * @var string
     */
    public $message;
    /**
     * @SWG\Property(format = "int64", enum = {1, 2})
     * @var integer
     */
    public $status;
}
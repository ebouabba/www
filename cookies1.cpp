std::string myCookies(std::string url)
{
    std::string SetCookies = "Set-Cookie: ";
    if (!url.empty())
    {
        int i = 0;
        std::string name;
        std::string value;
        int size_fname = url.find("first-name");
        int size_lname = url.find("last-name");
        size_fname += 11;
        size_lname += 10;
        for (; url[size_fname] != '&'; size_fname++)
        {
            name.push_back(url[size_fname]);
        }
        for (; url[size_lname] != '\0'; size_lname++)
        {
            value.push_back(url[size_lname]);
        }
        std::cout << name << std::endl;
        std::cout << value << std::endl;
        SetCookies.append(name);
        SetCookies.append("=");
        SetCookies.append(value);
        std::cout << SetCookies << std::endl;
    }
    return SetCookies;
}